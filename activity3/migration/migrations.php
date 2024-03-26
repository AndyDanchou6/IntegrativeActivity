<?php
include 'usersMigration.php';

$usersTable = new UserMigration();
$res = $usersTable->createTable();

echo json_encode($res);