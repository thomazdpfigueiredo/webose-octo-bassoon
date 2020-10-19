<!DOCTYPE html>
<html lang="pt-br">
		<head>
		<title> SENAC Informática </title>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/corpo.css">
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
	echo "<a href='local.php?logout'>Sair</a>";
}
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location: ./index.php");
}
 ?>
</div>

	
			
	<section>
		<article>		
			<div id="corpo">
				<!-- Texto -->
				<h3>
				Endereço: Av. Venâncio Aires, 93 - Azenha, Porto Alegre - RS, 90040-191
				<br>
				Horário: Aberto ⋅ Fecha às 18:00
				<br>
				Telefone: (51) 3288-7750
				</h3>
				<br>
			</div>
			<div id="estilo-mapa">
				<div id="mapa">	
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13815.16645767556!2d-51.2188929!3d-30.0428357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1592833426705!5m2!1spt-BR!2sbr" 
				frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
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