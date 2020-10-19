<?php 
	include ('conexao.php');

	//pegando a informação do formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];		
	$estado = $_POST['estado'];	
	$profissao = $_POST['profissao'];
	$renda = $_POST['renda'];
	$risco = $_POST['risco'];
	$comunicacao = $_POST['comunicacao'];
	$isolamento = $_POST['isolamento'];
	$pessoas = $_POST['pessoas'];
	$diagnostico = $_POST['diagnostico'];
	$dias = $_POST['dias'];
	$opiniao = $_POST['opiniao'];

	

	$criptografia = MD5($senha);

	//inserir os dados do formulário na tabela 'contato' do banco 'agenda'
	$sql = "INSERT INTO formulario(nome, email, sexo, estado, profissao, renda, risco, comunicacao, isolamento, pessoas, diagnostico, dias, opiniao)
	VALUE('$nome', '$email', '$sexo', '$estado', '$profissao', '$renda', '$risco', '$comunicacao', '$isolamento', '$pessoas', '$diagnostico', '$dias', '$opiniao')";

	if ($conn->query($sql) === TRUE) {
		echo "<script language='javascript' type='text/javascript'>
		alert('Obrigado por participar!');
		window.location.href='../../index.html';
		</script>";
		die();
	}else{
		echo "Erro".$sql."<br />".$conn->error;
		echo "<br />";
		echo "Não foi possível realizar o cadastro";
	}
	$conn->close();
	
 ?>