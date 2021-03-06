<?php 
	
	session_start();
	if (isset($_SESSION['nome'])){
		$nome = $_SESSION['nome'];
	}else{
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
		

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta charset="UTF-8">
		<title>Car Control - Editar</title>
		<script type="text/javascript" src="../../assets/js/codigo.js"></script>
		<link rel="stylesheet" href="../../assets/css/estilo.css">
	</head>

	<body>
		<div class="container" >
			<header>
				<!-- Image and text -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  	<a class="navbar-brand" href="../../">
				    	<i class="fas fa-car"></i>Controle Veicular
				  	</a>
				  	
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
				  	</button>
				</nav>
				<div class="user">
					<p>Bem Vindo <?php echo $nome; ?> <a href="../controller/controleUsuario.php?opcao=Sair">Sair</a></p>
				</div>
			</header>
			<section>
				<h1>Editar</h1>

				<?php 
                    include '../model/crudVeiculo.php';
                    $codigo = $_GET['codigo'];
                    $resultado =  mostrarVeiculoEditar($codigo);
                    if($resultado){
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            $placa = $linha['placa'];
                            $marca = $linha['marca'];
                            $modelo = $linha['modelo'];
                            $preco = $linha['preco'];
                        }
                    }
               	?>

				<form method="POST" action="../controller/controleVeiculo.php" class="form-insert">
				  	<div class="form-group">
				    	<label for="placa">Placa</label>
				    	<input type="text" class="form-control" id="placa" name="placa" value="<?php echo $placa; ?>" required="yes">
				  	</div>
				  	<div class="form-group">
				    	<label for="marca">Marca</label>
				    	<input type="text" class="form-control" id="marca" placeholder="Digite a Marca" name="marca" value="<?php echo $marca; ?>" required="yes">
				  	</div>
				  	<div class="form-group">
				    	<label for="modelo">Modelo</label>
				    	<input type="text" class="form-control" id="modelo" placeholder="Digite o Modelo" name="modelo" value="<?php echo $modelo; ?>" required="yes">
				  	</div>
				  	<div class="form-group">
				    	<label for="preco">Preço</label>
				    	<input type="number" class="form-control" id="preco" name="preco" value="<?php echo $preco; ?>" required="yes">
				  	</div>

				  	<!--codigo necessario para usar o código no controle-->
				  	<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

				  	<button type="submit" class="btn btn-primary" name="opcao" value="Editar">Salvar</button>
				  	<button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
				  	<a class="btn btn-secondary" href="visualizarVeiculo.php">Cancelar</a>
				</form>
			</section>
		</div>
	</body>
</html>