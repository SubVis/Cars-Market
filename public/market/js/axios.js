
function myFunction(e) {
  preventDefault();
}


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