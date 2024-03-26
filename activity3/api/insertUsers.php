<?php
include '../Model/UserModel.php';

$insertUser = new User();
$res = $insertUser->insert($_POST);

echo json_encode($res);