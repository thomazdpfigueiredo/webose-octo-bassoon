<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> SENAC Informática </title>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/corpo.css">
		<link rel="stylesheet" type="text/css" href="css/formulario.css">
	</head>
	
	<body>	
 	<div class="container">
 	<!-- Menu -->
 	<section>
	<header>
		<div id="corpo">
		<img src="imagens/senac.png" alt="Logo Senac" class="logo"
					title="Logo Senac">		
		<nav  id="menu">
			<ul>
				<li><a href="index.php">Início </a></li>
				<li><a href="cursos.php">Cursos </a>
					<ul>
						 <li><a href="cursos/admin.php">Administração</a></li>
						 <li><a href="cursos/info.php">Informática</a></li>
						 <li><a href="cursos/sis.php">Sistemas</a></li>
						 <li><a href="cursos/jogos.php">Jogos</a></li>
						 <li><a href="cursos/redes.php">Redes</a></li>
					</ul>
				</li>
				<li><a href="local.php">Localização </a></li>
				<li><a href="cadastro.php">Cadastrar</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
		</div>
	</header>
</section>	

<div align="right">
<?php 
	
	session_start();
if (isset($_SESSION['nome_usu_sessao'])) {

	echo "Olá ".$_SESSION['nome_usu_sessao']." seja bem vindo!";
	echo "<a href='login.php?logout'>Sair</a>";
}
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location: ./index.php");
}
 ?>
</div>
	
		
	<br>
			
	<section>
		 <article>
	 	<h2 id="hcadas"> Acessar o sistema</h2><br>
	 	<form action="verificarLogin.php" method="post"	/>
	 	<fieldset>
	 		<fieldset class="bloco">
	 			<div class="dados">
			 		<label>Usuário: 
			 			<input type="text" name="usuario" id="usuario" >
			 		</label>
			 	</div>
			</fieldset>
			<br>
			<fieldset class="bloco">
	 			<div class="dados">	
					<label>Senha: 
			 			<input type="password" name="senha" id="senha">
			 		</label>
			 	</div>
			</fieldset>
			<br>
					<button type="submit" name="entrar"class="botao"> Entrar </button>
		</fieldset>
		</form>
		</article>
	</section>

	



	<br>
	<!-- Imagens/Links -->
	<hr>
	<br>
	<a href="#s1">
	<img src="imagens/seta.png" class="imgseta" alt="seta" title="Subir para o topo da página">
	</a>
	<br><br><br><br><br>
	<a href="https://www.facebook.com/senacrsoficial" target="blank">
	<img src="imagens/logoface.png" class="imgredes" alt="Facebook" title="Facebook"> 
	</a>
	<a href="https://www.instagram.com/senac_rs/" target="blank">
	<img src="imagens/logoinst.png" class="imgredes" alt="Instagram" title="Instagram">
	</a>
	<a href="https://twitter.com/senacrs" target="blank">
	<img src="imagens/logotwi.png" class="imgredes" alt="Twitter" title="Twitter">
	</a>

	<footer>Desenvolvido por Thomaz Figueiredo</footer>
	</div>
	</body>
</html>