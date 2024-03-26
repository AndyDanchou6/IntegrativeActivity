<?php
include 'database.php';

$create_db = new Database();
$create_db->createDb('api_db');