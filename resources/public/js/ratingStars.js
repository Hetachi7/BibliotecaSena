$(document).ready(function(){
    $('.rating').rating();
  });
  

  $(document).ready(function(){
    $('#commentToggle').click(function(){
      $('#commentSection').collapse('toggle');
      
      // Cambiar el texto del botón
      var isVisible = $('#commentSection').hasClass('show');
      if (isVisible) {
        $('#commentToggle').text('Ocultar comentarios');
      } else {
        $('#commentToggle').text('Mostrar comentarios');
      }
    });
  });
