document.getElementById("car-store").addEventListener("click", function(event){
  event.preventDefault();

  axios.post('storeCars')
 .then(function (response) {
    console.log(response.data.title[0]);
    document.innerHTML(response);
    el = document.getElementById("title-class");
    el2 = document.getElementById("title-input");
    el.innerHTML = response.data.title[0];
    el2.classList.add('error');
   // console.log(document.getElementById("title-class").previousSibling);
  })
 .catch(function(error){
 	console.log(error);
 })

});



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