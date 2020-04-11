// Add navbar toggle btn
let nav = document.getElementById('collapse'),
    btn = document.getElementById('closeNavbtn');

btn.onclick = function () {
  console.log(nav.style.display)
  if(nav.style.display == 'none' || nav.style.display == '')
    nav.style.display = "block"
  else
    nav.style.display = "none"
}

function fadeOut(el) {
  var opacity = 1;

  el.style.opacity = 1;
  el.style.filter = '';

  var last = +new Date();
  var tick = function() {
    opacity -= (new Date() - last) / 400;
    el.style.opacity = opacity;
    el.style.filter = 'alpha(opacity=' + (100 * opacity)|1 + ')';

    last = +new Date();

    if (opacity > 0) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
    }
  };

  tick();
}

window.addEventListener('load', function (e) {
    let loader = document.querySelector('div.loader');
    fadeOut(loader);
    loader.parentNode.removeChild(loader);
});