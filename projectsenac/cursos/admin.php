<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> SENAC - Administração </title>
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
	echo "<a href='admin.php?logout'>Sair</a>";
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
	<img src="../imagens/admin.png" alt="Imagem Administração" class="imgadmin"
	title="Imagem Administração" >
	
				<br>	
			<div id="corpo">
				<!-- Texto -->		
				<h3>Administração</h3>
				<br>
				<p> 
				Os setores e departamentos que compõem a estrutura das organizações apresentam 
				fluxos de processos e formas de comunicação internas que requerem profissionais capazes de 
				compreender o funcionamento e a dinâmica de cada área da empresa.
				<br>
				Nesse contexto, o Técnico em Administração exerce atividades de apoio aos processos de diversas 
				áreas de uma organização, desempenhando suas funções de forma proativa, com capacidade para solucionar 
				problemas e bom relacionamento interpessoal, interagindo com diferentes equipes de trabalho no decorrer 
				dos processos organizacionais.
				<br>
				</p>
				<br>
				<!-- Tabela Turmas -->
				<h3> Turmas Abertas SENAC</h3>
				<br>
				<table>
					<thead>
						<tr>
						<td><h3>Local</h3></td>
						<td ><h3>Dia/Turno</h3></td>
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h4>SENAC BAGÉ</h4></td>
							<td><h4>
							24/08 -Noite
							</h4></td>
							
						</tr>
						<tr>
							<td><h4>SENAC GRAVATAÍ</h4></td>
							<td><h4>
							20/07 - Noite
							<br>
							08/09 - Manhã
							</h4></td>
						
						</tr>
						<tr>
							<td><h4>SENAC NOVO HAMBURGO</h4></td>
							<td><h4>
							22/06 - Noite
							<br>
							19/10 - Noite
							</h4></td>
						
						</tr>
						<tr>
							<td><h4>SENAC SANTANA DO LIVRAMENTO</h4></td>
							<td><h4>
							24/08 -Noite
							</h4></td>
							
						</tr>
						<tr>
							<td><h4>SENAC URUGUAIANA</h4></td>
							<td><h4>
							02/09 - Noite
							</h4></td>
						</tr>
						<tr>
							<td><h4>SENAC VIAMÃO</h4></td>
							<td><h4>
							21/09 - Noite
							</h4></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
						<td colspan="3"><h3> Para maiores informações entre no <a href="../local.php">link</a></h3></td>
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