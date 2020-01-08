// document.getElementById("car-store").addEventListener("click", function(event){
//   event.preventDefault();

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
            /** adding the values and the name of the input to the temp array */
            temp.push(npt.value,npt.getAttribute("name"));
            /** Add the temp to the value array to be returned*/
            values.push(temp);
        });
        
        /** check if there is textareas and get their values */
        if (form.getElementsByTagName('textarea')){
            /** get all textareas in the form*/
            let textareas = [...form.getElementsByTagName("textarea")];
            /** loop throgh them */
            textareas.forEach(txtarea => {
                /** create/reset a temporary array to store the name and value for the current input */
                let temp = [];
                /** adding the values and the name of the textarea to the temp array */
                temp.push(txtarea.value, txtarea.getAttribute("name"));
                /** Add the temp to the value array to be returned*/
                values.push(temp);
            });
        };

        /** check if there is selections and get their values */
        if (form.getElementsByTagName('select')){
            /** get all selections in the form*/
            let selections = [...form.getElementsByTagName("select")];
            /** loop throgh them */
            selections.forEach(Selection => {
                let temp = [];
                /** create/reset a temporary array to store the name and value for the current input */
                let options = Selection.options[Selection.selectedIndex].value;
                /** adding the values and the name of the textarea to the temp array */
                temp.push(options, Selection.getAttribute("name"));
                /** Add the temp to the value array to be returned*/
                values.push(temp);
            });
        };
        /** End if */
    });
    return values;
};

/* ================================ Start validation ================================ */ 
var paragraph= [...document.querySelectorAll("[data-validation]")];

document.getElementById("car-store").addEventListener("click", function(event){
    event.preventDefault();
    let formVal = getFormVal([...document.getElementsByTagName('form')]);
    let fv =  new FormData(document.getElementById('storeForm2'));
  //  console.log('form=', fv)
    axios.post('storeCars', fv).then(function (response) {
        /** handle success */

        document.getElementsByClassName('container')[0].innerHTML = response.data;
   
    }) /**End then */
    .catch(function(error){
             /** looping throgh all keys in the response */
             for (const key in error.response.data) {
                if (error.response.data.hasOwnProperty(key)) {
                    const d = error.response.data[key];
                    
                    /**  looping throgh all paragraph keys in the dom */
                    paragraph.forEach(p => {
                        if(p.getAttribute('data-validation') == key){
                            /** adding */
                            p.innerHTML = d;
                        }
                    });
                } /** End if */
            } /** End for */

   });
});
/*===============================form 2 validation==============================*/
var paragraph= [...document.querySelectorAll("[data-validation]")];

document.getElementById("car-store2").addEventListener("click", function(event){
    event.preventDefault();  
    let fv =  new FormData(document.getElementById('storeForm2'));
  //  console.log('form=', fv)
    axios.post('storeCars2', fv).then(function (response) {
        /** handle success */

        document.getElementsByClassName('container')[0].innerHTML = response.data;
   
    }) /**End then */
    .catch(function(error){
             /** looping throgh all keys in the response */
             for (const key in error.response.data) {
                if (error.response.data.hasOwnProperty(key)) {
                    const d = error.response.data[key];
                    
                    /**  looping throgh all paragraph keys in the dom */
                    paragraph.forEach(p => {
                        if(p.getAttribute('data-validation') == key){
                            /** adding */
                            p.innerHTML = d;
                        }
                    });
                } /** End if */
            } /** End for */

   });
});
















/*
var par= [...document.querySelectorAll("[data-validation]")];

document.getElementById("car-store2").addEventListener("click", function(event){
    event.preventDefault();

    axios.post('store_photo_Cars').then(function (response) {
        // handle success
        console.log(response);
       
   
    });  
  
   
});
*/
  /*
  .then(function (response) {
    // handle success
    console.log(response.data);
  })
  .catch(function(error){

console.log(error.data)
  	  // if(error.code == 422){
       // console.log(error.data)}
  
  //})

<<<<<<< HEAD
});



function storeCar(){
 document.getElementById('') preventDefault();
axios.post('storeCars')
  .then(function (response) {
    // handle success
    console.log(response);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .finally(function () {
    // always executed
  });

}




*/
/*$('#car-store').on('click', function(e){
        e.preventDefault();
        btn = $(this);
        form = btn.parents('form');
        url = form.attr('action');

        sendData = new FormData(form[0]);
        $.ajax({
            url:url,
            type:'post',
            data:sendData,
           beforeSend: function(){
        
           },
            success:function(result)
            {
            },
            error: function(data,error)
            {
            	console.log(error);
                if(error=='error')
                {
                   $.each(data.responseJSON.errors, function(k,v){
                    if(k == 'name'){
                        $('.name-error input').removeClass('is-invalid').addClass('is-invalid');
                        $('.name-error strong').html(v);
                    }else if(k == 'email'){
                        $('.email-error input').addClass('is-invalid');
                        $('.email-error strong').html(v);
                    }else if(k == 'password'){
                        $('.password-error input').addClass('is-invalid');
                        $('.password-error strong').html(v[0]);
                    }
                   });
                }
              
            },
            cache:false,
            processData: false,
            contentType:false,
               
        });
        
    }); */

