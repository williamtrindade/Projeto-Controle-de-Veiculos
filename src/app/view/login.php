<?php 
	
	session_start();
	if (isset($_SESSION['nome'])){
		header("Location: ../../");
	}else{
		$logado = "nao";
	}

?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta charset="UTF-8">
		<title>Car Control - Login</title>
		<link rel="stylesheet" href="../../assets/css/estilo.css">
	</head>

	<body>
		<div class="container" >
			<header>
				<!-- Image and text -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

				  	<a class="navbar-brand" href="login.php">
				    	<i class="fas fa-car"></i>Controle Veicular
				  	</a>			  	
				</nav>
			</header>

			<section>
				<h1>Entrar</h1>
				<form class="box-login" method="post" action="../controller/controleUsuario.php" >
			  		<div class="form-group">
					    <label for="nome">Nome</label>
					    <input type="text" class="form-control" id="nome" placeholder="Entre com o nome" required="yes" name="nome">
			  		</div>
			  		<div class="form-group">
					    <label for="senha">Senha</label>
					    <input type="password" class="form-control" id="senha" placeholder="Senha" required="yes" name="senha">
			  		</div>
			 		<button type="submit" class="btn btn-primary" name="opcao" value="Entrar">Entrar</button>
			 		<a class="btn" href="cadastroUsuario.php">Criar Conta</a>
				</form>
			</section>
		</div>
	</body>

</html>