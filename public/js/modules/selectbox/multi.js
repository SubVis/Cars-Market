/**
 * 
 * @param {Array} selecty The selection you wanna apply the function on
 * @param {String} holder Placeholder
 */
function allMulti(selecty, holder) {
    selecty.forEach(function (exactSelect) {
        let value = [], // Selection value
            optText = [],
            optAll = exactSelect.options, // All options

            ds = holder || optAll[0].text || optText.join('--'), // The placeholder
            parent = exactSelect.parentElement || document.querySelector('[data-wrapper=' + exactSelect.getAttribute("name") + "]");

        // our replacement 
        let our_div = document.createElement("div");
        our_div.classList.add("replacement");
        // our_div.setAttribute('data-select-name', exactSelect.getAttribute("name"));

        // The input for filtering and showing the selected options
        let placeholder = document.createElement('p');
        placeholder.classList.add('replacement-input'); // Add classes 
        placeholder.innerText =  ds; // add initial value 
        placeholder.setAttribute('name', exactSelect.getAttribute("name")); // add initial value 

        /* Delete the first item which is the placeholder */
        if(!holder) optAll.remove(0);

        // The whole list
        let our_list = document.createElement('ul');
        our_list.classList.add('replacement-ul');

        // Add options to the replacement
        for (let index = 0; index < optAll.length; index++) {
            const opt = optAll[index];

            // The itmes list
            let our_item = document.createElement('li');
            our_item.classList.add('replacement-ul--li');
            our_item.setAttribute('data-val', opt.value);

            // The span
            let our_span = document.createElement('span');
            our_span.classList.add('span');
            let TheText = document.createTextNode(opt.text); // you can add text from here

            // The check button
            let checker = document.createElement('div');
            checker.classList.add('checker');

            let icon = document.createElement('i');
            icon.classList.add("fa", "far-faacebook");

            checker.append(icon)
            our_span.append(TheText)
            our_item.append(our_span, checker)
            our_list.append(our_item);
        };

        let dd = document.createElement('div');
        dd.classList.add('dd');
        dd.append(our_list)
        our_div.append(placeholder, dd)
        parent.append(our_div);

        exactSelect.style.display = "none"; // Hide the element

        // handle the selection
        let clickable = parent.querySelectorAll('.replacement-ul--li');

        clickable.forEach(function (li) {
            li.onclick = function () {
                let el = this;
                let text = this.firstChild.innerText; 
                let val = this.getAttribute('data-val');
                let allOptions = [...optAll];
                let exactOpt = allOptions.find( option =>{
                    return option.value == val;
                });
    
                let input = el.parentElement.parentElement.previousSibling; /** Get the paragraph */                
                
                /* Add Checked class to checker to inform the user he has checked the button and take the value of it or remove it from the value array */
                
                if (!el.lastElementChild.classList.contains("checked")) {
                    exactOpt.selected='selected';
                    el.lastElementChild.classList.add("checked");
                    li.classList.add("checked");
                    
                    value.push(val);
                    optText.push(text);
                    
                    // Set the placeholder
                    input.innerText = optText.join(" - ");
                    
                } else {
                    exactOpt.selected='';
                    el.lastElementChild.classList.remove("checked");
                    li.classList.remove("checked");
                    value.pop(val);
                    optText.pop(text);
    
                    // Set the placeholder
                    if (optText.length > 0)
                        input.innerText = optText.join(" - ");
                    else
                        input.innerText = ds ;
                };                
            }
        });
    }); // End of the function
};

window.onclick = function (e) {
    let m = e.target.classList.contains("replacement-input") || e.target.classList.contains("replacement-ul") || e.target.classList.contains("replacement-ul--li") || e.target.classList.contains("span") || e.target.classList.contains("checker");
    if(!m){
        [...document.querySelectorAll('.replacement')].forEach( function (s) {
            s.scrollTop = 0;
            s.classList.remove("replacement-opened");
        });
    }
};
/* ========================= code ========================= */
let selecte = [...document.querySelectorAll('.multiSelect')]; // All select tags in the dom

allMulti(selecte);

let togglerse = document.querySelectorAll('.replacement-input');
togglerse.forEach(function (div) {
    div.onclick = function () {
        if (div.parentElement.classList.contains("replacement-opened"))
            div.parentElement.classList.remove("replacement-opened");
        else
            div.parentElement.classList.add("replacement-opened");
    }
});

