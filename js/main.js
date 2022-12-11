//inicializar swiper testimonios
var swiper = new Swiper("#testimonios .mySwiper", {
    pagination: {
        clickable: true,
        el: '#testimonios .swiper-pagination',
        type: 'bullets',
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true

});

// ready jquery
$(document).ready(function() {

    $("#menu_checkbox").change(function() {
        if(this.checked) {
          $('body').css('overflow','hidden');
        }else{
          $('body').css('overflow','initial');
        }
    });


    $('#enviar_contacto').click(function(e){

        e.preventDefault();

        $('#form-contacto .notice-error').css('opacity','0');
  
          var nombre = $('#nombre'),
            email = $('#email'),
            telefono = $('#telefono'),
            mensaje = $('#mensaje');
        
          
          if(nombre.val() == ''){
              $('#form-contacto .notice-error').css('opacity','1').html('El campo “Nombre" es obligatorio.')
              nombre.focus();
              return false;
          }


          if(email.val() == ''){
            $('#form-contacto .notice-error').css('opacity','1').html('El campo “Email” es obligatorio.')
            email.focus();
            return false;
          }

          if (echeck(email.val()) == false) {
            $('#form-contacto .notice-error').css('opacity','1').html('El campo “Email” debe ser un correo válido.')
            email.focus();
            return false;
          }

  
          if(telefono.val() == ''){
              $('#form-contacto .notice-error').css('opacity','1').html('El campo “Teléfono” es obligatorio.')
              telefono.focus();
              return false;
          }
  
          if(mensaje.val() == ''){
            $('#mensaje').css('opacity','1').html('El campo “Mensaje” es obligatorio.')
            mensaje.focus();
            return false;
          }
    
          $('#enviar_contacto').val('Enviando...').addClass('disabled');

          $.ajax({
              type: "POST",
              url: "includes/send_form.php",
          
              data: 
              "nombre=" + nombre.val() + 
              "&email=" + email.val() + 
              "&telefono=" + telefono.val() + 
              "&mensaje=" + mensaje.val() + 
              "&tipo=contacto",
              success: function (html) {  
                  
                  if(html == 'OK'){
                    $('#form-contacto form').addClass('enviado');
                    $('#form-contacto form').html('<p>Tu mensaje fue enviado. ¡Muchas gracias!</p>');
                  }else{
                    $('#form-contacto form').addClass('enviado');
                    $('#form-contacto form').html('<p>¡Ooops! Ocurrió un inconveniente. Intenta nuevamente más tarde. </p>'); 
                  }
                                
              }
          });
          return false;
      });
  
});


function echeck(str) {
	var at="@"
	var dot="."
	var lat=str.indexOf(at)
	var lstr=str.length
	var ldot=str.indexOf(dot)
	if (str.indexOf(at)==-1){
	return false
	}
	
	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
	return false
	}
	
	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
	return false
	}
	
	if (str.indexOf(at,(lat+1))!=-1){
	return false
	}
	
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
	return false
	}
	
	if (str.indexOf(dot,(lat+2))==-1){
	return false
	}
	
	if (str.indexOf(" ")!=-1){
	return false
	}
	
	return true					
}