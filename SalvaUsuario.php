<?php
/**
 * Projeto de aplicação Avalisção - Sistema Atendimento a Clientes
 *
 * Wilson Lopes de Amorim
 */
// Verificar dados 



// Salva os dados no Banco 
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" ) {
    $nome = $_POST["nome"];
	$email = $_POST["email"];
	$data = date("yy-m-d");
	if (is_null($nome)){
		echo "<script>location.href='usuario.php'</script>";
}
		$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

		if (mysqli_connect_errno()) {
			printf("Conecção Falhou: %s\n", mysqli_connect_error());
			exit();
		}
		$query = "INSERT INTO usuario ( Nome, Id_TipoUsuario, Email, DataAtualiza) VALUES ('$nome', $tipousuario, '$email', $data )";
		//$result = mysqli_query($link, $query);
		
		if (mysqli_query($link, $query)) {
		  echo "";
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($link);
		}

		mysqli_close($link);
		echo "<script>location.href='usuario.php'</script>";
}
// Update nos dados no Banco
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "up" ) {
	$id = $_POST["idUsuario"];
	$tipousuario = $_POST["tipousuario"];
	 $nome = $_POST["nome"];
	$email = $_POST["email"];
	$data = date("yy-m-d");
	if (is_null($nome)){
		echo "<script>location.href='usuario.php'</script>";
	}
	$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

	if (mysqli_connect_errno()) {
		printf("Conecção Falhou: %s\n", mysqli_connect_error());
		exit();
	}
									
	$query = "UPDATE usuario SET Nome= '$nome', Email ='$email', Id_TipoUsuario = $tipousuario, DataAtualiza =$data WHERE Id_Usuario = $id ";
	//$result = mysqli_query($link, $query);
	
	if (mysqli_query($link, $query)) {
	  echo "";
	} else {
	  echo "Error: " . $query . "<br>" . mysqli_error($link);
	}

	mysqli_close($link);
	echo "<script>location.href='usuario.php'</script>";
}

// Update nos dados no Banco
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "ex" ) {
	$tipousuario = $_REQUEST["id"];
	
	$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

	if (mysqli_connect_errno()) {
		printf("Conecção Falhou: %s\n", mysqli_connect_error());
		exit();
	}
									
	$query = "DELETE FROM usuario WHERE Id_Usuario = $tipousuario ";
	//$result = mysqli_query($link, $query);
	
	if (mysqli_query($link, $query)) {
	  echo "";
	} else {
	  echo "Error: " . $query . "<br>" . mysqli_error($link);
	}

	mysqli_close($link);
	echo "<script>location.href='usuario.php'</script>";
}

?>