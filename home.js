$(document).ready(function() {
    $('#formulario').submit(function(e) {
        e.preventDefault();
        document.getElementById('submitForm');
        $.ajax({
            type: "POST",
            url: '/conn.php',
            data: $(this).serialize(),
            success: function(response)
            {
               alert('Acceso validado correctamente');
               $('#placa').val('');
               document.getElementById('submitForm');
           },
           error:function(error){
            console.log(e.message);
           }
       });
     });
});


