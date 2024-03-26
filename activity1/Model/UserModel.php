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

    
}
  