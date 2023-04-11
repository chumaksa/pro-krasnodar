const allCheckboxes = document.querySelectorAll('.filter input[type="checkbox"]')
const types = document.querySelectorAll('input[name="type"]');
const cities = document.querySelectorAll('input[name="city"]');
const objects = document.querySelectorAll('.object');
const changeButton = document.querySelector('#change');
const filter = document.querySelector('.filter');
const filterLink = document.querySelector('.filter-link');
const footerArrow = filterLink.querySelector('.filter-link__arrow');
const resetButton = document.querySelector('#reset');

export {allCheckboxes, cities, objects, types, changeButton, filter, filterLink, footerArrow, resetButton};