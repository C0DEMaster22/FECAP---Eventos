<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <!--<meta charset="utf-8">-->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="css/agency.min.css" rel="stylesheet">
    <title>FECAP - Eventos</title>

    <style type="text/css">
    	label{
    		font-family: verdana;
    		font-size: 4.5vw;
    		margin-left: 3vw;
    		color:#033800;


    	}

    </style>

  </head>

  <body style="background-color:#f6f9f6">
   		
  		<div class="card border-success mb-3" style="max-width: 100%;background-color: #1E6631;">
  			<div class="card-header">Header<img class="rounded mx-auto d-block"  style ="width:25%;float:left" src="https://www.fecap.br/trabalhe-conosco/assets/img/logo-fecap.png" alt="Responsive image"></div>
 		 </div>
</div>

	

   		<form>
  			<div class="form-group row">
    			<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    			<div class="col-sm-10">
      				<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    			</div>
  			</div>
  			<div class="form-group row">
  					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    				<div class="col-sm-10">
      					<input type="password" class="form-control" id="inputPassword" placeholder="Password">
    				</div>
  		</div>
</form>




   <!--    		<div class="card text-white  mb-3" style="max-width: 100%;">
  		
  		<div class="card-body" style="background-color: #1E6631; color:#f6f9f6;	height: 10%;box-sizing:border-box;	border-radius:5px 5px 5px 5px;"><img style="max-width: 20%;float:right;"src="https://www.fecap.br/trabalhe-conosco/assets/img/logo-fecap.png" alt="FECAP">
    	<h4 class="card-title" style="float:right;margin-top:8vw">FECAP - Eventos</h4>
  		</div>
	</div>

   <div class="card text-white  mb-3" style="max-width: 100%;">
  		
  		<div class="card-body" style="background-color: #1E6631;	color:#f6f9f6;	height: 30vw;box-sizing:border-box;	border-radius:5px 5px 5px 5px;"><img style="max-width: 22vw;float:center;"src="https://www.fecap.br/trabalhe-conosco/assets/img/logo-fecap.png" alt="FECAP">
    	<h4 class="card-title" style="float:right;margin-top:8vw">FECAP - Eventos</h4>
  		</div>
	</div>

				<div class="form-group col-sm-2  col-md-5">
					<h5 style="margin-top:10vw; margin-left: 5vw;color:#033800;">Dados Pessoais</h5>
				</div>
				<div class="form-group col-sm-2 col-md-4">
					<label for="sexo">Público *</label> <br>
					<select name="sexo" class="form-control col-sm-2 col-md-10" style="margin-left: 8vw;width:80vw;font-family: verdana; font-size: 4vw;height: 12vw;background-color: #f7fff7"required>
						<option value="">Selecione</option>
						<option value="1">Aluno FECAP</option>
						<option value="2">Ex-Aluno FECAP</option>
						<option value="3">Visitante</option>
					</select>
				</div>
				
				<div class="form-group col-sm-12 col-md-2">
					<label for="cpf" maxlength="10">CPF *</label>
					<input type="text" name="cpf" id="cpf" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="CPF" required>
				</div>	
				<div class="form-group col-sm-5 col-xs-2">
					<label for="nome">Nome Completo *</label>
					<input type="text" name="nome" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="Nome Completo" required maxlength="150">
				</div>

				<div class="form-group col-sm-3">
					<label for="data_nasc">Data Nascimento *</label>
					<input type="text" name="data_nasc" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="Data de Nascimento" required>
				</div>


				<div class="form-group col-sm-3">
					<label for="tel_res">Tel Contato *</label>
					<input type="text" name="tel_res" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="(99) 9999-9999">
				</div>


				<div class="form-group col-sm-6">
					<label for="email">Email *</label>
					<input type="email" name="email" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="E-mail" required>
				</div>

				<div class="form-group col-sm-6">
					<label for="curso">Curso *</label>
					<input type="text" name="curso" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="Curso em que se formou" required>
				</div>

				<div class="form-group col-sm-6">
					<label for="ano">Ano de Formatura *</label>
					<input type="text" name="ano" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"placeholder="Ano em que se formou" required>
				</div>

				<div class="form-group col-sm-3">
					<label for="sexo">Irá trazer acompanhante *</label> <br>
					<select name="sexo" class="form-control" style="margin-left: 8vw;width:80vw;font-family: verdana; font-style: italic;font-size: 4vw;height: 12vw;background-color: #f7fff7"required>
						<option value=""style="font-family: verdana; font-style: italic;font-size: 4vw;">Selecione</option>
						<option value="1"style="font-family: verdana; font-style: italic;font-size: 4vw;">Sim</option>
						<option value="2"style="font-family: verdana; font-style: italic;font-size: 4vw;">Não</option>
					</select>
				</div>

			-->
			<br>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
				