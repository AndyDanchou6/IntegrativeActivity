<?php
include '../Model/UserModel.php';
header("Content-Type: application/json");

$insertUser = new User();
$res = $insertUser->insert($_POST);

echo json_encode($res);