<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"  content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
  		<div class="page-header text-align-center">
   		 <h1>Agenda de contatos</h1>      
  		</div>      
	</div>
	<hr><br>
	<form action="{{ route('registrar_contato') }}" method="POST" class="row g-3 needs-validation" novalidate>

		@csrf
	        <div class="col-md-4">
		<label for="validationCustom01" class="form-label">Nome</label> <br>
		<input type="text" name="nome" class="form-control" id="validationCustom01"  required> <br>
		<div class="invalid-feedback">
    			Por favor, digite o seu nome!
		</div>
		</div>

		<div class="col-md-4">
		<label for="validationCustom03" class="form-label">Email</label><br>
		<input type="email" name="email" class="form-control" id="validationCustom02" required> <br>
		<div class="invalid-feedback">                                                          Por favor, digite um email!				      
		</div>
		</div>
		<div class="col-md-4">	
		<label for="validationCustom02" class="form-label">Telefone</label><br>
		<div class="input-group has-validation">
      			<span class="input-group-text" id="inputGroupPrepend">+</span>
			<input type="tel" name="telefone" class="form-control" aria-describedby="inputGroupPrepend" required>
			<div class="invalid-feedback">
         			Por favor, escreva um número de telefone!
			</div>
		</div>
		</div>

		<div class="col-12">
		<button class="btn btn-primary"> Salvar </button>
		</div>
		
	</form>
	

	<script>
		(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
		})()
	</script>
</body>
</html>
