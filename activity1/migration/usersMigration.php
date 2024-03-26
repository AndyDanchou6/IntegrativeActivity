<?php
include '../database/database.php';

class UserMigration extends Database {

    public function createTable() {
        $this->init_db();

        $res = $this->conn->query("CREATE TABLE users (
            id int auto_increment PRIMARY KEY,
            name varchar(255) UNIQUE NOT NULL,
            email varchar(255) UNIQUE NOT NULL, 
            password varchar(255) NOT NULL,
            token varchar(255) NOT NULL)");

        if ($res) {
            return [
                'status' => 200,
                'message' => 'Created Successfully'
            ];
        }

        return [
            'status' => 500,
            'message' => 'Internal Service Error'
        ];
    }
}