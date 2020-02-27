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