
// select elements config with Choices 
let Select = [...document.querySelectorAll('.js-choice')];

Select.forEach(inpt => {
  new Choices(inpt, {
    searchEnabled: true,
    searchChoices: true,
    noResultsText: 'لا توجد نتيجة',
    noChoicesText: 'لا يوجد',
    itemSelectText: 'اضغط لتختار',
    renderChoiceLimit: 1000,
  });
});
