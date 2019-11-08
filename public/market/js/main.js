window.onload = function () {
  //    Animate();    
  ScrollOut();
}


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

var file = [...document.querySelectorAll('[data-get]')] ,
    preview = [...document.querySelectorAll('[data-preview]')] ;

file.forEach(input => {
  input.onchange = () => {
    let me = preview.filter( image =>  image.getAttribute('data-preview') == input.getAttribute('data-get') );

    me[0].src = URL.createObjectURL(input.files[0])
  };
});

