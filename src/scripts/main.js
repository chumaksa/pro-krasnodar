import { getUniqCollection, hasCheckedElement } from "./collections.js";
import { objects, types, cities, allCheckboxes, changeButton } from "./constElements.js";
changeButton.addEventListener('click', () => {
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
});

