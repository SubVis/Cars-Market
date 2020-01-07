/**
 * 
 * @param {Array} selecty All select inputs in the dom
 * @param {String} holder input's placeholder
 */

function allOne(selecty, holder) {
    /** Loop throw the selections array */
    selecty.forEach(function (exactSelect) {
        let value = "", /** Selection value */
            optText = "", /** Selection placeholder */
            optAll = exactSelect.options, /** All options */
            ds = holder || optAll[0].text || optText, /** Selection placeholder */
            parent = exactSelect.parentElement || document.querySelector('[data-wrapper=' + exactSelect.getAttribute("name") + "]"); /** Selection parent */

        
        let our_div = document.createElement("div"); /** Create the div. */
            our_div.classList.add("replacement"); /** Add Class to this parent to categorize them. */
        let classes = exactSelect.classList; /** Get selection classes. */
            classes.forEach(selectionClass => { /** Loop throgh the classes. */
                our_div.classList.add(selectionClass); /** Add each class to the parent. */
            })
        
            our_div.setAttribute('data-select-name', exactSelect.getAttribute("name")); /** Add selection name to the parent to the parent. */

        // The input for filtering and showing the selected options
        let placeholder = document.createElement('p');
        placeholder.classList.add('replacement-input'); // Add classes 
        placeholder.innerText = ds ; // add initial value 
        placeholder.setAttribute('name', exactSelect.getAttribute("name")); // add initial value 

        /* Delete the first item which is the placeholder */
        if (!holder) optAll.remove(0);

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
        }
        our_div.append(placeholder, our_list)
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
                let exactOpt = allOptions.find(option => {
                    return option.value == val;
                });

                let input = el.parentElement.previousSibling;

                let checker_checked = parent.querySelectorAll('.replacement-ul--li .checker.checked');
                if (checker_checked) {
                    checker_checked.forEach(n => {
                        n.classList.remove("checked")
                    });
                    
                    clickable.forEach(function (li) {
                        li.classList.remove("checked")
                    });
                };
                
                /* Add Checked class to checker to inform the user he has checked the button and take the value of it or remove it from the value array */
                if (!el.lastElementChild.classList.contains("checked")) {
                    allOptions.forEach(opt => {
                        opt.selected = '';
                    });
                    exactOpt.selected = 'selected';
                    el.lastElementChild.classList.add("checked");
                    li.classList.add("checked");
                    value = val;
                    value = val;
                    optText = text;
                    
                    // Set the placeholder
                    input.innerText= text;
                    parent.querySelector('div.replacement').scrollTop = 0;
                    parent.querySelector('div.replacement').classList.remove("replacement-opened");
                }

            }
        });

        
    }); // End of the function
};

/* ========================= code ========================= */
let select = [...document.querySelectorAll('select')]; // All select tags in the dom

allOne(select);

let togglers = document.querySelectorAll('.replacement-input');
togglers.forEach(function (div) {
    div.onclick = function () {
        if (div.parentElement.classList.contains("replacement-opened"))
            div.parentElement.classList.remove("replacement-opened");
        else
            div.parentElement.classList.add("replacement-opened");
    }
});

window.onclick = function (e) {
    let m = e.target.classList.contains("replacement-input") || e.target.classList.contains("replacement-ul") || e.target.classList.contains("replacement-ul--li");
    if(!m){
        [...document.querySelectorAll('.replacement')].forEach( function (s) {
            s.scrollTop = 0;
            s.classList.remove("replacement-opened");
        });
    }
};