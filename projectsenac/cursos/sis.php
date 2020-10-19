<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> SENAC - Técnico em Desenvolvimento de Sistemas </title>
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
	echo "<a href='sis.php?logout'>Sair</a>";
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
	<img src="../imagens/sis.png" alt="Imagem Sistemas" class="imgsis"
	title="Imagem Sistemas">
				<br>		
			<div id="corpo">
				<!-- Texto -->	
				<h3>Técnico em Desenvolvimento de Sistemas</h3>
				<br>
				<p> 
				Os sistemas de informações criam milhares de dados todos os dias, o profissional que integra esses 
				dados e transforma em informações relevantes para empresas, está em grande ascensão. O Técnico em 
				Desenvolvimento de Sistemas- Bilíngue surge para suprir uma demanda de mercado, desenvolve sistemas 
				completos e com a habilidade conversacional em língua inglesa. O grande crescimento na área da tecnologia 
				de informação, são as necessidades de atuação a nível global, formando as unidades curriculares e 
				as habilitações intermediarias, como: assistente de banco de dados e assistente de desenvolvimento 
				de sistemas.
				<br><br>
				Este curso, é ideal para as pessoas que estejam cursando a partir do 2º ano do ensino médio e a idade
				mínima exigida é de 15 anos.
				<br><br>
				A equipe docente é composta por profissionais com experiência na área de TI e formação superior.
				<br><br>
				Após concluir este curso, o certificado de Técnico em Desenvolvimento de Sistemas, estará disponível e 
				com validade nacional. Faça o curso Técnico em Desenvolvimento de Sistemas- Bilíngue, aumente suas 
				possibilidades de atuar em grandes organizações multinacionais e esteja apto a ser um profissional 
				altamente qualificado!
				<br>
				</p>
				
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
							<td><h4>SENAC SÃO LEOPOLDO</h4></td>
							<td><h4>
							10/08 - Noite
							</h4></td>
							
						</tr>
						<tr>
							<td><h4>SENAC TECH (PORTO ALEGRE)</h4></td>
							<td><h4>
							18/05 - Noite
							<br>
							08/09 - Manhã
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