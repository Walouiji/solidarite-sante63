<?php
	$data = [
		'title' => $_POST['title'],
		'content' => $_POST['content'],
	];

	$bdd = new PDO('mysql:host=localhost;dbname=dolibarr;charset=utf8', 'dolibarrmysql', 'R00t');

	$insert = "INSERT INTO articles (title,content) VALUES (:title, :content)";	
	$command = $bdd->prepare($insert);
	$command->execute($data);

	header("Location:Home.php");
	exit();
?>