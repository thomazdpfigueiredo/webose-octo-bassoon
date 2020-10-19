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
	echo "<a href='redes.php?logout'>Sair</a>";
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
	<img src="../imagens/redes.png" alt="Imagem Redes" class="imgrede" 
	title="Imagem Redes">
	
				<br>			
			<div id="corpo">
				<!-- Texto-->
				<h3>Técnico em Redes de Computadores</h3>
				<br>
				<p> 
				Pesquisas apontam que as profissões de TI mais promissoras da atualidade estão relacionadas com o 
				desenvolvimento de softwares e aplicativos para dispositivos móveis, com a segurança e a infraestrutura
				de redes e com os projetos em User Experience (U.E). Todas elas necessitam de um profissional da área
				de redes conectando a infraestrutura e disponibilizando os softwares desenvolvidos.
				<br><br>
				O Técnico em Redes de Computadores tem seu perfil profissional que implementa e mantem a infraestrutura, 
				os equipamentos de acesso, os sistemas operacionais e os serviços de redes de computadores, aplicando
				normas de segurança em rede e padrões técnicos, de acordo com normas de qualidade, de saúde e de 
				segurança do trabalho e na preservação ambiental.
				<br><br>
				O profissional, atua em instituições públicas, privadas e do terceiro setor que demanda redes de 
				computadores ou na prestação autônoma de serviços, com ênfase no ambiente de redes de computadores, 
				capacitando assim, o profissional para acompanhar projetos de rede,
				implementação, gerencia e administração nos serviços específicos de rede, tanto na parte física 
				quanto na parte lógica, tentando sempre manter a segurança dos dados e da rede de computadores. O 
				trabalho autônomo também é uma alternativa de mercado, pois empresas de pequeno porte, que não podem 
				manter profissionais em tempo integral, contratam prestadores de serviços para implementação, suporte 
				e administração.
				<br><br>
				Este curso, é ideal para as pessoas que estejam cursando o ensino médio, a partir do 2º ano, a idade 
				mínima exigida de 15 anos.
				<br><br>
				A equipe docente é composta por profissionais com experiência na área de TI e formação superior.
				<br><br>
				Após o término deste curso, o certificado do Técnico em Redes de Computadores, estará disponível e com
				validade nacional. Desenvolva serviços de manutenção preventiva e reativa, dando suporte a tomada de 
				decisões estratégicas e táticas associadas a redes!
				<br>
				</p>
				<br>
				<!-- Tabela Turmas -->
				<h3> Turmas Abertas SENAC</h3>
				<br>
				<table>
					<thead >
						<tr>
						<td><h3>Local</h3></td>
						<td ><h3>Dia/Turno</h3></td>			
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h4>SENAC TECH (PORTO ALEGRE)</h4></td>
							<td><h4>
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