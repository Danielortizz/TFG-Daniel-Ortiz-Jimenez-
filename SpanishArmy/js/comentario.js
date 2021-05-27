$( document ).ready(function() {

    mostrarComentario();
    $('.botoncoments').click(function(e){
        const postData={
           idProducto: $(this).attr('data-Producto'),
           idUsuario:  $(this).attr('data-idUsuario'),
           comentario: $('#coments').val()

        }
        $.post('añadircomentario.php', postData, function(response){
            mostrarComentario();

        });
        e.preventDefault();
    });

    function mostrarComentario(){
        $.ajax({
            url:'mostrarComentario.php',
            type:'GET',
            data: {idProducto: $('.botoncoments').attr('data-Producto')},
            success: function numero(response){
                let comentarios= JSON.parse(response); 
                let mensaje='';
                comentarios.forEach(comentarios => {
                    mensaje += `
                    <span>${comentarios.comentario}</span><br>`  
                    
                });
                $('#mostrarComentario').html(mensaje);
            }
                
        })
            
    }


});