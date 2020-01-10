/* ================================ Start validation ================================ */
var paragraph = [...document.querySelectorAll("[data-validation]")],/** Get all validation paragragraphs */
    sell1form = document.getElementById('storeForm'),
    allFields = [...sell1form.querySelectorAll('input, .replacement')];


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
    axios.post('storeCars', fv).then(function (response) {
        /** Replace the content of the page */
        document.getElementsByClassName('container')[0].innerHTML = response.data;

        /** Get all validation paragragraphs from ht new form */
        paragraph = [...document.querySelectorAll("[data-validation]")];

        let select = [...document.querySelectorAll('select')]; // All select tags in the dom

        /** Add event listner to the new button */
        document.getElementById("car-store2").addEventListener("click", function (event) {
            event.preventDefault();
            let fv = new FormData(document.getElementById('storeForm2'));
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
    }) /**End then */
    .catch(function (error) {
        console.log('error');
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
                // unvalid
                
                allFields.forEach(p => {
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