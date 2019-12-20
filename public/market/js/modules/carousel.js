// initializing siema carousel
const mySiema = new Siema({
    selector: '.siema',
    easing: 'ease-out',
    perPage: 1,
    startIndex: -1,
    loop: true,
    rtl: true,
});

// initializing previous and next btns
document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
document.querySelector('.next').addEventListener('click', () => mySiema.next());

// add carousel go to with pics
const
    carousel = document.querySelector('.siema > div'),
    carouselItems = [...carousel.childNodes].slice(0, carousel.childElementCount - 2),
    buttons = document.querySelector('.navigation');

// add button dynamicly 
let data_index = 0;

carouselItems.forEach(div => {
    // create div for each element
    var parent = document.createElement('div');
    var image = document.createElement('img');
    // set images source dynamiclly
    image.setAttribute('src', div.childNodes[0].getAttribute('src'));
    
    image.setAttribute('data-index', data_index);
    data_index++;

    // add classes for css approches
    parent.classList.add('parent');
    image.classList.add('go-to');

    // append to document
    parent.appendChild(image);
    buttons.appendChild(parent);
});

const images = Array.from(document.querySelectorAll('img.go-to'));

images.forEach(image => {
    let indexs = image.getAttribute('data-index');
    image.addEventListener('click', () => mySiema.goTo(indexs-1) );
});