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

        // Look for a default selected option
        for (var i = 0, iLen = optAll.length; i < iLen; i++) {

            if (optAll[i].defaultSelected) {
                exactSelect.selectedIndex = i;
                return;
            }
        }


        let our_div = document.createElement("div"); /** Create the div. */
        our_div.classList.add("replacement"); /** Add Class to this parent to categorize them. */
        let classes = exactSelect.classList; /** Get selection classes. */
        classes.forEach(selectionClass => {  /** Add selection classes to the parent. */
            our_div.classList.add(selectionClass);
        });
        our_div.setAttribute('data-select-name', exactSelect.getAttribute("name")); /** Add selection name to the parent to the parent. */

        // The input for filtering and showing the selected options
        let placeholder = document.createElement('div');
        placeholder.classList.add('replacement-input'); // Add classes 
        placeholder.innerText = ds; // add initial value 
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

        let dd = document.createElement('div');
        dd.classList.add('dd');
        dd.append(our_list)
        our_div.append(placeholder, dd)
        parent.append(our_div);

        exactSelect.style.display = "none"; // Hide the element


        // If no option is the default, select first or none as appropriate
        exactSelect.selectedIndex = -1; // or -1 for no option selected 

        // handle the selection
        let clickable = parent.querySelectorAll('.replacement-ul--li');

        list(clickable, exactSelect);

    }); // End of the function
};

/**
 * @param {Array} clickable 
 */
function list(clickable, exactSelect) {
    let value = "", /** Selection value */
        optText = "", /** Selection placeholder */
        optAll = exactSelect.options, /** All options */
        ds = optText, /** Selection placeholder */
        parent = exactSelect.parentElement || document.querySelector('[data-wrapper=' + exactSelect.getAttribute("name") + "]"); /** Selection parent */

    clickable.forEach(function (li) {
        li.onclick = function () {
            let el = this;
            let text = this.firstChild.innerText;
            let val = this.getAttribute('data-val');
            let allOptions = [...optAll];
            let exactOpt = allOptions.find(option => {
                return option.value == val;
            });

            let input = el.parentElement.parentElement.previousSibling;

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
                //console.log(input);
                input.setAttribute('val', val)
                input.innerText = text;
                parent.querySelector('div.replacement').scrollTop = 0;
                parent.querySelector('div.replacement').classList.remove("replacement-opened");
            }

        }
    });
}

/* ========================= code ========================= */
let select = [...document.querySelectorAll('.singleSelect')]; // All select tags in the dom

allOne(select);

let togglers = document.querySelectorAll('.replacement-input');
togglers.forEach(function (div) {
    
    div.onclick = function (e) {
        if(!e.target.classList.contains('.replacement-input'))
        if (div.parentElement.classList.contains("replacement-opened"))
            div.parentElement.classList.remove("replacement-opened");
        else
            div.parentElement.classList.add("replacement-opened");
    }
});

window.onclick = function (e) {
    let m = e.target.classList.contains("replacement-input") || e.target.classList.contains("replacement-ul") || e.target.classList.contains("replacement-ul--li") ||e.target.tagName === "SPAN"  || e.target.classList.contains("checker");
    
    if (!m) {
        [...document.querySelectorAll('.replacement')].forEach(function (s) {
            s.scrollTop = 0;
            s.classList.remove("replacement-opened");
        });
    }
};

/** MODEL STUFF */
let brand_parent = document.querySelector('.replacement.w-full.singleSelect[data-select-name="brand"]').firstElementChild;
var config = {
    attributes: true,
    childList: true,
    subtree: true,
    characterData: true
};
var observer = new MutationObserver(function () {
    let value = brand_parent.getAttribute('val');

    var formData = new FormData();
    formData.append('brand_id', value);

    axios.post('ajax_model', formData).then(res => {
        let model_parent = document.querySelector('.replacement.w-full.singleSelect[data-select-name="model"]').lastElementChild,
            ul = model_parent.firstElementChild;
        
        if (res.data.length == 0) {
            document.querySelector('.replacement.w-full.singleSelect[data-select-name="model"] .replacement-input').innerText = "لا يوجد موديلات لهذه الماركة حالياً";
            ul.innerHTML = '';
        }
        else {
            ul.innerHTML = '';
            document.querySelector('.replacement.w-full.singleSelect[data-select-name="model"] .replacement-input').innerText = "اختر الموديل" ;

            res.data.forEach(model => {
                let option = document.createElement("option");
                let li = document.createElement("li");
                
                li.setAttribute('data-val', model.id);
                li.innerHTML = `<span class="span">${model.name}</span><div class="checker"></div>`;
                li.classList.add("replacement-ul--li");

                option.setAttribute('value', model.id);
                option.innerText = model.name;

                document.querySelector('select#model').appendChild(option);
                ul.appendChild(li);
            });

            let all = [...ul.children];


            list(all, document.querySelector('select#model.w-full.singleSelect'))
        }

    }).catch(err => {
        console.log(err);
    })
});
observer.observe(brand_parent, config);