import {allCheckboxes, cities, objects, types} from "./constElements.js";
const getCheckedListOfId = (collection) => (
    Array.from(collection).filter((item) => item.checked).map((item) => item.id)
);

const hasCheckedElement = (collection) => {
    return getCheckedListOfId(collection).length !== 0;
}

const getCheckedCollectionOfTypes = (collection, objects) => {
    const checkedListOfId = getCheckedListOfId(collection)
    const checkedObjects = Array.from(objects).filter((object) => {
        return checkedListOfId.includes(...object.dataset.type.split(' '))
    });
    return checkedObjects;
}

const getCheckedCollectionOfCities = (collection, objects) => {
    const checkedListOfId = getCheckedListOfId(collection)
    const checkedObjects = Array.from(objects).filter((object) => {
        return checkedListOfId.includes(...object.dataset.city.split(' '))
    });
    return checkedObjects;
}

const getUniqCollection = (typesCollection, citiesCollection) => {
    const uniqCollection = [];
    const typesCheckedCollection = getCheckedCollectionOfTypes(typesCollection, objects);
    const citiesCheckedCollection = getCheckedCollectionOfCities(citiesCollection, objects);
    const citiesCheckedList = getCheckedListOfId(citiesCollection);

    if (typesCheckedCollection.length !== 0 && citiesCheckedCollection.length !== 0) {
        typesCheckedCollection.forEach((item) => {
            if (citiesCheckedList.includes(...item.dataset.city.split(' '))) {
                uniqCollection.push(item);
            }
        })
    } else if (typesCheckedCollection.length === 0 && citiesCheckedCollection.length !== 0) {
        return citiesCheckedCollection;
    } else if (typesCheckedCollection.length !== 0 && citiesCheckedCollection.length === 0) {
        return typesCheckedCollection;
    }

    return uniqCollection;
}

const handleChangeButtonClick = () => {
    const renderList = getUniqCollection(types, cities);

    if (renderList.length === 0 && !hasCheckedElement(allCheckboxes)) {
        objects.forEach((object) => {
            object.classList.remove('object_hidden');
        })
    } else {
        objects.forEach((object) => {
            if (!renderList.includes(object)) {
                object.classList.add('object_hidden');
            } else {
                object.classList.remove('object_hidden');
            }
        })
    }
}

export {getCheckedCollectionOfTypes, hasCheckedElement, getUniqCollection, getCheckedListOfId, getCheckedCollectionOfCities, handleChangeButtonClick}