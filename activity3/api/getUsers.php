<?php
include '../Model/UserModel.php';
header("Content-Type: application/json");

if ($_GET) {
    $users = new User();
    $result = $users->search($_GET);

    echo json_encode($result);
} else {
    $users = new User();
    $result = $users->all();

    echo json_encode($result);
}


//var_dump($_GET);