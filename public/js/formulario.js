$('form').on('submit',function(event){
    event.preventDefault();

    var url = $(this).attr('action'),
        data = $(this).serialize();

    $.ajax({
        method:'post',
        url: url,
        data: data,
        success: function(response){
            console.log(response);

            var mensagem = document.createElement('p');
            mensagem.className += 'alert alert-success';
            mensagem.innerHTML ="hello"+response.usuario+ "seu formulario foi enviado com sucesso";
            console.log(mensagem);
            $("form").prepend(mensagem);
        }
    });

});