<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

	require_once(__DIR__.'/database/connection.db.php');
	require_once(__DIR__.'/database/restaurant.class.php');
	require_once(__DIR__.'/templates/common.tpl.php');
	require_once(__DIR__.'/templates/restaurant.tpl.php');


	$db = getDatabaseConnection();
	$categories = Restaurant::getRestaurantCategories($db);

	drawHeader($_SESSION['name']);

	foreach ($categories as $category) {
		$restaurants = Restaurant::getRestaurantsByCategory($db,$category);
		drawRestaurantsByCategory($restaurants,$category);
	}
		
	drawFooter();
?>