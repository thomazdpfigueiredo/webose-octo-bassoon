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
	echo "<a href='jogos.php?logout'>Sair</a>";
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
	<img src="../imagens/jogos.png" alt="Imagem Jogos" class="imgjogos"
	title="Imagem Jogos">
				<br>
							
			<div id="corpo">
				<!-- Texto -->
				<h3>Técnico em Programação de Jogos Digitais</h3>
				<br>
				<p> 
				A perspectiva da internet ampliou ainda mais o mercado de desenvolvimento de jogos digitais, que 
				passaram a ser produzidos na perspectiva de multiplataformas, ou seja, o mesmo jogo é produzido e 
				distribuído para computadores, tablets, celulares e consoles, usando a internet como meio de transmissão 
				de dados. Esse cenário tem demandado pessoas qualificadas para integrar equipes de desenvolvimento, 
				compostas por profissionais de diferentes áreas.
				<br><br>
				O Técnico em Programação de Jogos Digitais realiza o planejamento do processo de produção do jogo 
				digital e incorporação dos elementos multimídia à plataforma de desenvolvimento, sendo responsável 
				pela programação e integração desses elementos. Realiza testes, manutenção e melhorias no jogo digital, 
				adotando normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no 
				desempenho de sua função, trabalha em equipe, estabelece relações interpessoais construtivas e 
				compreende o contexto em que está inserido, demonstrando capacidade propositiva e criativa.
				<br><br>
				Atua em organizações públicas e privadas de qualquer segmento, tais como da área do comércio, de 
				serviços, da indústria, de consultoria, de ensino e pesquisa, por meio da prestação de serviços 
				autônomos, temporários ou contrato efetivo.
				<br><br>
				Este curso, é ideal para as pessoas que estejam cursando o ensino médio, a partir do 2º ano, a idade 
				mínima exigida de 15 anos.
				<br><br>
				A equipe docente é composta por profissionais com experiência na área de TI e formação superior.
				<br><br>
				Após o término deste curso, o certificado do Técnico em Programação de Jogos Digitais, estará disponível 
				e com validade nacional. Projete, desenvolva e gerencie jogos digitais com toda a perspectiva do
				mundo digital!
				<br>
				</p>
				<br>
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