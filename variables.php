<?php
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement = $mysqlClient->execute();
$users = $usersStatement->fetchAll();


$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement = $mysqlClient->execute();
$recipes = $recipesStatement->fetchAll();
?>