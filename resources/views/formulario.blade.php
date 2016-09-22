<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Carrinho</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <div class="container">
            @if(!empty($usuario))
                {{ $usuario }}
            @endif
        <form method="post" action='{{ url("/formulario")}}'>
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="control-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label class="control-label" for="cpf">CPF:</label>
                <input class="form-control" type="text" name="cpf" id="cpf">
            </div>
            <div class="form-group">
                <label class="control-label" for="endereco">Endereço:</label>
                <input class="form-control" type="text" name="endereco" id="endereco">
            </div>
            <div class="form-group">
                <input class="form-control btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset("js/formulario.js")}}"></script>
</body>
</html>