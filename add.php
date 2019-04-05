<?php
	require_once 'init.php';
	
	//PEGA OS DADOS DO FORMULARIO
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$email = isset($_POST['email']) ? $_POST['email']: null;
	$gender = isset($_POST['gender']) ? $_POST['gender']: NULL;
	$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate']: NULL;

	//Validação (bem simples, só pra evitar dados vazios)
	if(empty($name) || empty($email) || empty($gender) || empty($birthdate))
	{
		echo "Volte e preencha todos os campos";
		exit;
	}
	
	//a data vem no formato dd/mm/YYYY
	//Então precisamos converter para YYYY-mm-dd/mm
	$isoDate = dateConvert($birthdate);
	
	//Insere no Banco
	$PDO = db_connect();
	$sql = "INSERT INTO users(name, email, gender, birthdate) VALUES (:name, :email, :gender, :birthdate)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':birthdate',$isoDate);
	
	if ($stmt->execute())
	{
		header('Location: index.php');
	}
	else
	{
		echo "Erro ao cadastrar";
		print_r($stmt-errorInfo());
	}
?>