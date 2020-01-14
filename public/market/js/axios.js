
/* ================================ Form 1 ================================ */
var paragraph = [...document.querySelectorAll("[data-validation]")],/** Get all validation paragragraphs */
    sell1form = document.getElementById('storeForm'),
    allFields = [...sell1form.querySelectorAll('input, .replacement')],
    form1 = document.getElementById('form1'),
    form2 = document.getElementById('form2');


document.getElementById("car-store").addEventListener("click", function (event) {
    event.preventDefault();
    /**Reset all hints */
    paragraph.forEach(p => {
        if (p.getAttribute('data-validation')) {
            /** clear hint text */
            p.innerHTML = '';
        }
    });

    allFields.forEach(p => {
        if ( p.getAttribute('name') || p.getAttribute('data-select-name') ) {
            /** adding error message to the paragraph*/
            p.classList.remove('unvalid');
        }
    });

    let fv = new FormData(sell1form); /** Get the form */
    console.log(fv);
    axios.post('storeCars', fv).then(function (response) {
        console.log(response)
        /** Replace the content of the page */
        form1.style.display = 'none';
        form2.style.display = 'block';
    }) /**End then */
    .catch(function (error) {
        /** looping through all keys in the response */
        for (const key in error.response.data) {
            if (error.response.data.hasOwnProperty(key)) {
                const d = error.response.data[key];
                /**  looping through all paragraph keys in the dom */
                paragraph.forEach(p => {
                    if (p.getAttribute('data-validation') == key) {
                        /** adding error message to the paragraph*/
                        p.innerHTML = d;
                    }
                });
                
                allFields.forEach(p => { /** Add unvalid class to the feilds */
                    if ( p.getAttribute('name') == key || p.getAttribute('data-select-name') == key) {
                        /** adding error message to the paragraph*/
                        p.classList.add('unvalid');
                        console.log(p)
                    }
                });
            } /** End if */
        } /** End for */
    });
});

/* ========================== Form 2 ============================== */
 /** Add event listner to the new button */
 document.getElementById("car-store2").addEventListener("click", function (event) {
    event.preventDefault();
    let fv = new FormData(document.getElementById('storeForm2'));
    console.log(fv);
    axios.post('storeCars2', fv).then(function (response) {
        /** handle success */
        console.log(response)
    }) /**End then */
    .catch(function (error) {
        console.log(error.response)
       /** looping through all keys in the response */
        for (const key in error.response.data) {
            if (error.response.data.hasOwnProperty(key)) {
                const d = error.response.data[key];

                /**  looping through all paragraph keys in the dom */
                paragraph.forEach(p => {
                    if (p.getAttribute('data-validation') == key) {
                        /** adding */
                        p.innerHTML = d;
                    }
                });
            } /** End if */
        } /** End for */ 
    });
});