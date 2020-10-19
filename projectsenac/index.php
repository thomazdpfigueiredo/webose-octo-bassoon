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
	echo "<a href='index.php?logout'>Sair</a>";
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
				<h2>Histórico</h2>	
				<h3>SOBRE O SENAC-RS</h3>
				<img src="imagens/pcs.jpg"  class="imgpcs" alt="Imagem de Computadores"
				title="Imagem de Computadores">
				<br>
				<p> 				
				O Serviço Nacional de Aprendizagem Comercial – Senac é uma instituição de educação profissional, 
				fundada em 10 de janeiro de 1946 com o objetivo de colaborar na obra, difusão e aperfeiçoamento do 
				ensino profissional no setor terciário. No Rio Grande do Sul, o Senac foi instalado em 13 de setembro 
				do mesmo ano e nos mais de 70 anos de atuação já capacitou mais de 7 milhões de gaúchos. A instituição 
				cumpre a importante missão de educar para o trabalho em atividades do comércio de bens, serviços e 
				turismo. O Senac-RS faz parte da Federação do Comércio de Bens e Serviços do Rio Grande do Sul – 
				Fecomércio-RS, o que vincula a entidade ao mundo do trabalho por meio de 569 mil empresas do comércio 
				de bens, serviços e turismo – que geram um milhão de empregos formais.
				<br><br>
				O Senac-RS disponibiliza educação em todos os níveis – do Menor Aprendiz à Pós-Graduação. Atualmente, 
				a entidade conta com duas faculdades – Faculdade Senac Porto e Faculdade de Tecnologia Senac Pelotas, 
				além de 41 escolas de educação profissional distribuídas pelo Estado e 23 Unidades Sesc/Senac. São mais 
				de 60 postos de atendimento que possibilitam o Senac atender a todos os 497 municípios gaúchos.
				<br><br>
				Muito antes de se falar em responsabilidade social, o Senac já exercia, na prática, a inclusão social 
				ao preparar menores aprendizes para o mundo do trabalho. Mais do que ser a sua razão de existir, o 
				Menor Aprendiz é a prova da importância e contribuição da Instituição para a educação profissional 
				brasileira. Vinculados ao programa Jovem Aprendiz, por meio da Lei Federal 10.097/200 e Decreto 
				nº 5598/2005, os cursos de Aprendizagem Comercial, oferecidos gratuitamente pelo Senac-RS, envolvem 
				os alunos em aulas que variam de 1.100 a 1.200 horas de atividades curriculares, das quais metade se 
				referem à capacitação teórica e a outra metade à prática supervisionada (realizada nas dependências da 
				empresa).
				<br><br>
				O Programa Senac de Gratuidade (PSG), resultado de um acordo entre o Senac e o Governo Federal em 2008, 
				significa educação profissional de qualidade para que milhares de pessoas possam planejar seus estudos 
				e ter mais oportunidade de trabalho e emprego. O PSG oferece cursos de Aprendizagem, cursos de nível 
				técnico, qualificação técnica, cursos de capacitação e aperfeiçoamento, totalizando mais de 20 mil 
				alunos atendidos gratuitamente nas unidades educacionais do Estado. Para ter acesso a esses cursos, 
				os candidatos deverão atender aos seguintes critérios: pessoas com baixa renda, na condição de alunos 
				matriculados ou egressos da educação básica e trabalhadores – empregados ou desempregados-, 
				priorizando-se aqueles que satisfizerem as duas condições (aluno e trabalhador). Além disso, a 
				Instituição desenvolve diversos projetos sociais em parceria com empresas e organização 
				não-governamentais (ONG´s).
				<br><br>
				Considerando a rapidez das informações e do desenvolvimento tecnológico, o Senac oferece cursos de 
				capacitação em horários alternativos, aplicando metodologias diferenciadas e personalizadas, 
				laboratórios de alta tecnologia, atendimentos individualizados em ambientes modernos e confortáveis. 
				Nos diversos níveis de capacitação, através de aulas presenciais ou à distância, o modelo pedagógico 
				está baseado na apropriação de competências para o trabalho. O Senac propõe a qualificação de um 
				indivíduo capaz de articular conhecimentos, habilidades e atitudes com o objetivo de agir, decidir e 
				intervir em situações nem sempre previstas dentro e fora do mundo do trabalho, promovendo a construção 
				da cidadania.
				<br><br>
				</p>
				<img src="imagens/unidade.jpg" class="imguni" alt="Imagem da Sede"
				title="Imagem da Sede">
				<h3>SOBRE O SISTEMA FECOMÉRCIO-RS</h3>				
				<br>
				<p>	
				Presente em todos os pontos do Rio Grande do Sul, o Sistema Fecomércio-RS (Federação do Comércio de 
				Bens e de Serviços do Estado do RS) utiliza sua força política e institucional em prol da comunidade 
				gaúcha.
				<br><br>
				Opera com representatividade na defesa dos empresários do comércio de bens, serviços e turismo, 
				promovendo o empreendedorismo e o desenvolvimento de 546 mil estabelecimentos, responsáveis por 
				aproximadamente 1,5 milhão de empregos formais no Estado.
				<br><br>
				O Sistema Fecomércio-RS conta com 102 sindicatos empresariais em sua base para subsidiar e intensificar 
				suas ações. Gerencia ainda o Sesc/RS e o Senac-RS, com mais de uma centena de Unidades Operacionais no 
				Estado, proporcionando ações na área de bem-estar social e qualificação profissional a milhares de 
				gaúchos.
				<br><br>
				</p>
				<p>Bandeiras defendidas pela Fecomércio-RS:</p>
					<ul>
						<li>Gestão pública eficiente e eficaz</li>
						<li>Racionalização dos tributos</li>
						<li>Modernização da relação capital e trabalho</li>
						<li>Formalização e longevidade das empresas</li>
						<li>Educação de qualidade e bem-estar social</li>
					</ul>
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