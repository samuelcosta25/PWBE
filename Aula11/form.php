<?php 

$host='localhost';
$usuario = 'root';
$senha = '';
$banco='clientes';

//conexao com banco

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if ($conexao){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data_nascimento=$_POST['data_nascimento'];
	$endereco=$_POST['endereco'];

	//inserir dados na tabela
	$sql = "INSERT INTO clientes (nome, email, data_nascimento, endereco) VALUES ('$nome', '$email', '$data_nascimento', '$endereco')";

	 mysqli_connect($conexao, $sql);

	// verifica insercao
	 if (mysqli_affected_rows($conexao)>0){
	 	//redireciona para pag de sucesso
	 	header('Location: sucesso.php');
	 } else {
	 	//redireciona pag de erro
	 	header('Location: erro.php');
	 }
	} else {
		//redireiona para pag de erro
		header('Location: erro.php');
	
	}

 ?>