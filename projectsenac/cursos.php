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
	echo "<a href='cursos.php?logout'>Sair</a>";
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
	<!-- Texto -->						
			<div id="corpo">

				<img src="imagens/sala.jpg" alt="SENAC" title="SENAC"  class="imgsala">
			
				<h3 id="cursos">Administração</h3>
				<p>				
				Os setores e departamentos que compõem a estrutura das organizações apresentam 
				fluxos de processos e formas de comunicação internas que requerem profissionais capazes de 
				compreender o funcionamento e a dinâmica de cada área da empresa.
				<br>	
				<a href="cursos/admin.php">Link para maiores informações</a>
				</p>
				<br>
				<h3 id="cursos">Técnico em Informática</h3>
				<p>				
				O Técnico em Informática realiza o planejamento e a execução dos processos de manutenção de 
				computadores e a operação de redes locais de computadores, além do desenvolvimento de aplicativos 
				para desktops, dispositivos móveis e internet. 
				<br>
				<a href="cursos/info.php">Link para maiores informações</a>
				</p>					
				<br>
				<h3 id="cursos">Técnico em Desenvolvimento de Sistemas</h3>
				<p>				
				Os sistemas de informações criam milhares de dados todos os dias, o profissional que integra esses 
				dados e transforma em informações relevantes para empresas, está em grande ascensão.
				<br>
				<a href="cursos/sis.php">Link para maiores informações</a>
				</p>
				<br>
				<h3 id="cursos">Técnico em Programação de Jogos Digitais</h3>
				<p>				
				O Técnico em Programação de Jogos Digitais realiza o planejamento do processo de produção do jogo 
				digital e incorporação dos elementos multimídia à plataforma de desenvolvimento, sendo responsável 
				pela programação e integração desses elementos. 
				<br>
				<a href="cursos/jogos.php">Link para maiores informações</a>
				</p>				
				<br>
				<h3 id="cursos">Técnico em Redes de Computadores</h3>
				<p>				 
				Pesquisas apontam que as profissões de TI mais promissoras da atualidade estão relacionadas com o 
				desenvolvimento de softwares e aplicativos para dispositivos móveis, com a segurança e a infraestrutura
				de redes e com os projetos em User Experience (U.E). Todas elas necessitam de um profissional da área
				de redes conectando a infraestrutura e disponibilizando os softwares desenvolvidos.
				<br>
				<a href="cursos/redes.php">Link para maiores informações</a>
				</p>
				<br>	
			</article>

				<!-- Tabela Cursos Livres -->
				<h3> Cursos Livres SENAC</h3>
				<table>
					<thead>
						<tr>
						<td><h3>Área de atuação</h3></td>
						<td ><h3>Curso</h3></td>
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h4>Artes</h4></td>
							<td><h4>
							Fotografia Digital - 48h
							<br>
							Maquiagem Artística KIDs - 16h
							</h4></td>
							
						</tr>
						<tr>
							<td><h4>Comunicação</h4></td>
							<td><h4>
							Inteligência Emocional - 20h
							<br>
							Locutor, Apresentador Animador - 303h
							</h4></td>
						
						</tr>
						<tr>
							<td><h4>Design</h4></td>
							<td><h4>
							Fotos para Casamento - 3h
							<br>
							Illustrator - 48h
							</h4></td>
						
						</tr>
						<tr>
							<td><h4>Informática</h4></td>
							<td><h4>
							AutoCAD 2D e 3D - 111h
							<br>
							Desenvolvimento de Websites - 168h
							</h4></td>
							
						</tr>
						<tr>
							<td><h4>Gestão</h4></td>
							<td><h4>
							Cálculas de Folha de Pagamento - 36h
							<br>
							Agenciamento Marítimo - 60h
							</h4></td>
						</tr>
						
					</tbody>
					<tfoot>
						<tr>
						<td colspan="3"><h3> Para maiores informações entre no <a href="local.php">link</a></h3></td>
						</tr>
					</tfoot>
				</table>
			</div>		
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