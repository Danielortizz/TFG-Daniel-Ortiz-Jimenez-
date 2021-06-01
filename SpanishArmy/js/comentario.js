$( document ).ready(function() {

//Funcion para mostrar los comentarios ya introducidos
    mostrarComentario();
    $('.botoncoments').click(function(e){
        const postData={
            //Usamos los id del prodcuto, del usuario y el comentario para poder mostrar un comentario o añadirlo
           idProducto: $(this).attr('data-Producto'),
           idUsuario:  $(this).attr('data-idUsuario'),
           comentario: $('#coments').val()
        }

        //Funcion para añadir los comentarios nuevos
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
                    mensaje +=

                     `<h2 class="titulo" style="color: red; -webkit-text-stroke-width: 1px;
                      -webkit-text-stroke-color: black;">${comentarios.Usuario}:</h2>
                     <span>${comentarios.comentario}</span><br>`  
                    
                });
                $('#mostrarComentario').html(mensaje);
            }
                
        })
            
    }


});