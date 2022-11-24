<?php
    session_start();
    include_once("conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_EMAIL);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	//echo "Nome: $nome <br>";
	//echo "E-mail: $email <br>";
	//echo "Login: $login <br>";
	//echo "Senha: $senha <br>";

    $result_usuario = "INSERT INTO cadastrados (Nome, Telefone, Email, Login, Senha) VALUES ('$nome', '$telefone', '$email', '$login', '$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green; '>Usuário cadastrado com sucesso</p>";
        header ("Location: criarconta.php?success=1");
    }
    else{
       header ("Location: criarconta.php?fail=1");
    
    }