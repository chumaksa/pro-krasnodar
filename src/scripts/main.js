import { getUniqCollection, hasCheckedElement, handleChangeButtonClick } from "./collections.js";
import { objects, types, cities, allCheckboxes, changeButton, filter, footerArrow, resetButton, filterLink } from "./constElements.js";

changeButton.addEventListener('click', handleChangeButtonClick);

filterLink.addEventListener('click', (event) => {
    event.preventDefault();
    footerArrow.classList.toggle('filter-link__arrow_rotate');
    filter.classList.toggle('filter_active');
})

resetButton.addEventListener('click', () => {
    allCheckboxes.forEach((item) => {
        item.checked = false;
    })
    handleChangeButtonClick();
})

