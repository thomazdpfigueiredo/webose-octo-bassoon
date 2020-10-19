<?php 
	include ('conexao.php');

	//pegando a informação do formulário
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$endereco = $_POST['endereco']; 
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];		
	$estado = $_POST['estado'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$nasc = $_POST['nasc'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$obs = $_POST['obs'];

	$criptografia = MD5($senha);

	//inserir os dados do formulário na tabela 'contato' do banco 'agenda'
	$sql = "INSERT INTO formulario(nome, sobrenome, endereco, numero, bairro, cidade, estado, cpf, rg, nasc, email, usuario, senha, obs)
	VALUE('$nome', '$sobrenome', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$cpf', '$rg', '$nasc', '$email', '$usuario', '$criptografia', '$obs')";

	if ($conn->query($sql) === TRUE) {
		echo "<script language='javascript' type='text/javascript'>
		alert('Cadastro realizado com sucesso!');
		window.location.href='login.php';
		</script>";
		die();
	}else{
		echo "Erro".$sql."<br />".$conn->error;
		echo "<br />";
		echo "Não foi possível realizar o cadastro";
	}
	$conn->close();
	
 ?>