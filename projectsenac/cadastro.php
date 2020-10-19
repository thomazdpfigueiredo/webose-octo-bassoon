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
	echo "<a href='cadastro.php?logout'>Sair</a>";
}
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location: ./index.php");
}
 ?>
</div>


			
	<section>  
		<article>
			<h2 id="hcadas">Cadastro de Clientes</h2>
			<form action="processaCadastro.php" method="post">
				<fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Nome:</label>
							<input type="text" name="nome" id="nome" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Sobrenome:</label>
							<input type="text" name="sobrenome" id="sobrenome" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Endereço:</label>							
							<input type="text" name="endereco" id="endereco" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Número:</label>							
							<input type="text" name="numero" id="numero" 
							required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Bairro:</label>							
							<input type="text" name="bairro" id="bairro" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Cidade:</label>							
							<input type="text" name="cidade" id="cidade" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Estado:</label>
			<select name="estado" required>
				<option value="" >Selecione o estado (UF)</option>
				<option value="Acre">Acre</option>
				<option value="Alagoas">Alagoas</option>
				<option value="Amapá">Amapá</option>
				<option value="Amazonas">Amazonas</option>
				<option value="Bahia">Bahia</option>
				<option value="Ceará">Ceará</option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Espírito Santo">Espírito Santo</option>
				<option value="Goiás">Goiás</option>
				<option value="Maranhão">Maranhão</option>
				<option value="Mato Grosso">Mato Grosso</option>
				<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
				<option value="Minas Gerais">Minas Gerais</option>
				<option value="Pará">Pará</option>
				<option value="Paraíba">Paraíba</option>
				<option value="Paraná">Paraná</option>
				<option value="Pernambuco">Pernambuco</option>
				<option value="Piauí">Piauí</option>
				<option value="Rio de Janeiro">Rio de Janeiro</option>
				<option value="Rio Grande do Sul" selected>Rio Grande do Sul</option>
				<option value="Rio Grande do Norte">Rio Grande do Norte</option>
				<option value="Rondônia">Rondônia</option>
				<option value="Roraima">Roraima</option>
				<option value="Santa Catarina">Santa Catarina</option>
				<option value="São Paulo">São Paulo</option>
				<option value="Sergipe">Sergipe</option>
				<option value="Tocantins">Tocantins</option>
			</select>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>CPF:</label>							
							<input type="text" name="cpf" id="cpf" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>RG:</label>							
							<input type="text" name="rg" id="rg" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Data Nascimento:</label>						
							<input type="date" id="nasc" name="nasc" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>E-mail:</label>							
							<input type="email" name="email" required id="email" placeholder="nome@dominio.com">
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Usuário:</label>							
							<input type="text" name="usuario" id="usuario" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Senha:</label>							
							<input type="password" name="senha" id="senha" required>
						</div>
					</fieldset>
					<fieldset class="bloco">
						<div class="dados">
							<label>Observação:</label>							
							<textarea id="obs" name="obs" rows="4" cols="30"></textarea>
						</div>
					</fieldset>
							<button type="submit" class="botao" name="submit">Enviar</button>
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
