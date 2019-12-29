
function myFunction(e) {
  preventDefault();
}

var paragraph= [...document.querySelectorAll("[data-validation]")];

document.getElementById("car-store").addEventListener("click", function(event){
    event.preventDefault();
  
    axios.post('storeCars').then(function (response) {
        // handle success
        for (const key in response.data) {
            if (response.data.hasOwnProperty(key)) {
                const d = response.data[key];
                console.log(key);

                paragraph.forEach(p => {
                    if(p.getAttribute('data-validation') == key){
                        p.innerHTML = d;
                    }
                });

            }
        }
    })  
    .catch(function(error){
        console.log(error);
   });
   
});

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