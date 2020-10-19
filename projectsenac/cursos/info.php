<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> SENAC Informática </title>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="stylesheet" type="text/css" href="../css/corpo.css">
	</head>
	
	<body>	
 	<div class="container">
 	<!-- Menu -->
	<section>
 		<header>
		<div id="corpo">
		<img src="../imagens/senac.png" alt="Logo Senac" class="logo"
					title="Logo Senac">
		<nav  id="menu">
			<ul>
				<li><a href="../index.php">Início </a></li>
				<li><a href="../cursos.php">Cursos </a>
					<ul>
						 <li><a href="admin.php">Administração</a></li>
						 <li><a href="info.php">Informática</a></li>
						 <li><a href="sis.php">Sistemas</a></li>
						 <li><a href="jogos.php">Jogos</a></li>
						 <li><a href="redes.php">Redes</a></li>
					</ul>
				</li>
				<li><a href="../local.php">Localização </a></li>
				<li><a href="../cadastro.php">Cadastrar</a></li>
				<li><a href="../login.php">Login</a></li>
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
	echo "<a href='info.php?logout'>Sair</a>";
}
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location: ../index.php");
}
 ?>
</div>

 
	<br>
	
	<section>
		<article>
	<img src="../imagens/info.png" alt="Imagem Informática" class="imginfo" 
	title="Imagem Informática">
				<br>				
			<div id="corpo">
				<!-- Texto -->	
				<h3>Técnico em Informática</h3>
				<br>
				<p> 
				O Técnico em Informática realiza o planejamento e a execução dos processos de manutenção de 
				computadores e a operação de redes locais de computadores, além do desenvolvimento de aplicativos 
				para desktops, dispositivos móveis e internet. 
				<br>
				Atualmente, o uso de tecnologias de computadores tem 
				crescido de tal forma que quase todos os dispositivos estão interligados em redes, desde smartphones 
				até servidores de alto processamento. A Internet está cada vez mais acessível à população, proporcionando 
				conexão instantânea aos usuários. Com o aprimoramento das tecnologias de microcomputadores e Internet, 
				praticamente todas as empresas têm redes de computadores, o que permite que a informação trafegue 
				com mais agilidade, ampliando o acesso dos funcionários à mesma plataforma de trabalho. As possibilidades 
				de inserção no mercado de trabalho são amplas, uma vez que este profissional pode empreender negócio 
				próprio na área ou atuar em empresas que desenvolvem soluções automatizadas, em departamentos de 
				tecnologia, em equipes de criação de conteúdo para web, em agências de publicidade e em instituições 
				de ensino.
				<br>
				</p>
				
				<!-- Tabela Turmas -->
				<h3> Turmas Abertas SENAC</h3>
				<br>
				<table>
								
					<tfoot>
						<tr>
						<td colspan="3"><h3> 
						Devido ao COVID-19 nossa escola não se encontra com turmas disponíveis para esse curso Técnico.
						<br>
						Para maiores informações entre no <a href="../local.php">link</a></h3></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</article>
	</section>

	<br>
	<!-- Imagens/Links -->
	<hr>
	<br>
	<a href="#s1">
	<img src="../imagens/seta.png" class="imgseta" alt="seta" title="Subir para o topo da página">
	</a>
	<br><br><br><br><br>
	<a href="https://www.facebook.com/senacrsoficial" target="blank">
	<img src="../imagens/logoface.png" class="imgredes" alt="Facebook" title="Facebook"> 
	</a>
	<a href="https://www.instagram.com/senac_rs/" target="blank">
	<img src="../imagens/logoinst.png" class="imgredes" alt="Instagram" title="Instagram">
	</a>
	<a href="https://twitter.com/senacrs" target="blank">
	<img src="../imagens/logotwi.png" class="imgredes" alt="Twitter" title="Twitter">
	</a>

	<footer>Desenvolvido por Thomaz Figueiredo</footer>
	</div>
	</body>
</html>