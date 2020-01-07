
/**
 * takes a form and return an Array of Arrays of inputs name and value
 * 
 * @param {Array} forms the form you wanna get its inputs.
 * 
 * @returns  {Array} Array of arrays ex: [ [input name, input value] ]
 */
function getFormVal(forms){
    let values = [];
    forms.forEach(form => {
        /** get all inputs in the form*/
        let inputs = [...form.getElementsByTagName("input")];
        /** loop throgh them */
        inputs.forEach(npt => {
            /** create/reset a temporary array to store the name and value for the current input */
            let temp = [];
            console.log(npt);
            /** adding the values and the name of the input to the temp array */
            temp.push(npt.value,npt.getAttribute("name"));
            /** Add the temp to the value array to be returned*/
            values.push(temp);
        });
        
        /** check if there is textareas and get their values */
        if (form.getElementsByTagName('textarea')){
            let textareas = [...form.getElementsByTagName("textarea")];

            textareas.forEach(txtarea => {
                let temp = [];
                
                temp.push(txtarea.value, txtarea.getAttribute("name"));
                values.push(temp);
            });
        };
        /** End if */
    });
    console.log(values);
    return values;
};

/* ================================ Start validation ================================ */ 
var paragraph= [...document.querySelectorAll("[data-validation]")];

document.getElementById("car-store").addEventListener("click", function(event){
    event.preventDefault();
    getFormVal([...document.getElementsByTagName('form')]);

    axios.post('storeCars').then(function (response) {
        /** handle success */

        /** looping throgh all keys in the response */
        for (const key in response.data) {
            if (response.data.hasOwnProperty(key)) {
                const d = response.data[key];
                
                /**  looping throgh all paragraph keys in the dom */
                paragraph.forEach(p => {
                    if(p.getAttribute('data-validation') == key){
                        /** adding */
                        p.innerHTML = d;
                    }
                });
            } /** End if */
        } /** End for */
    }) /**End then */
    .catch(function(error){
        console.log(error);
   });
});
/* ================================ End validation ================================ */ 