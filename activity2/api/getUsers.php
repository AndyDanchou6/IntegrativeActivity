<?php
include '../Model/UserModel.php';
header("Content-Type: application/json");

$users = new User();
$result = $users->all();

echo json_encode($result);

//var_dump($_GET);