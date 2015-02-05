<?php
require 'vendor/src/autoload.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=dropdown_autosuggest', 'ifah', 'password');

$faker = Faker\Factory::create();

foreach(range(1, 1000) as $x){
	$db->query("
		INSERT INTO users (username)
		 VALUES ('{$faker->userName}')
	");
}

?>