<?php
include '../database/database.php';

class User extends Database {

    public function all() {
        $this->init_db();

            $users = $this->conn->query("SELECT * FROM users");

            if ($users->num_rows > 0) {
                $data = array();

                for ($i = 0; $i < $users->num_rows; $i++) {
                    $data[$i] = $res = $users->fetch_assoc();
                }

                return $data;
            }

            else {

                return [
                    'status' => 404,
                    'message' => 'No data found'
                ];
            }
        
    }

    public function insert($params) {
        $this->init_db();

        $name = $params['name'];
        $email = $params['email'];
        $password = $params['password'];
        $token = $params['token'];

        if (!$name || !$email || !$password || !$token) {
            return [
                'status' => 500,
                'message' => 'Fields Required'
            ];
        } else {
            $res = $this->conn->query("INSERT INTO users (name, email, password, token) VALUES (
                '$name', '$email', '$password', '$token'
                )");
    
            if ($res) {
                return [
                    'status' => 200,
                    'message' => 'User Inserted Successfully'
                ];
            }
    
            return [
                'status' => 500,
                'message' => 'User Cannot Be Inserted'
            ];
        }
        
    }

}
  