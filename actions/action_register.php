<?php
	declare(strict_types = 1);

	session_start();

	require_once(__DIR__ .'/../database/connection.db.php');
	require_once(__DIR__ .'/../database/customer.class.php');
	require_once(__DIR__ .'/../imgUpload.php');

	$db = getDatabaseConnection();

	if( $_POST['confirmPassword'] == $_POST['password'] ){ 
		$id = Customer::registerCustomer($db, $_POST['username'], $_POST['password'], $_POST['email'], $_POST['address'], $_POST['phone']);
		if (!is_dir(__DIR__.'/../temp')) mkdir(__DIR__.'/../temp');
		move_uploaded_file($_FILES['userImage']['tmp_name'], __DIR__ . "/../temp/users.jpg");//move picture into temporary folder
		uploadImage($db,"users",$id);
		header('Location: /../login.php');
	}else{
		header('Location: /../register.php');
	}

?>