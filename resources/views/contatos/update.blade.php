<DOCTYPE html>
<html lang="pt-br">					       
<head>                                    <meta charset="UTF-8">                    <meta name="viewport"  content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Atualização do cadastro</title>    </head>                                   
<body>	       
<form action="{{ route('alterar_contato' , ['id' => $contato->id]) }}" method="POST">
@csrf 
<label for="">Nome</label>
<br>
<input type="text" name="nome" value="{{$contato->nome}}">        
<br>
<label for="">Email
</label>
<br>
<input type="email" name="email" value="{{$contato->email}}">
<br>
<label for="">Telefone
</label>
<br>
<input type="tel" name="telefone" value="{{$contato->telefone}}">
<br>
<button> Salvar </button>
</form>
</body>
</html>
