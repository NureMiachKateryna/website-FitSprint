<?php
class Users {
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "8135adrpt816wcx_0";
   public $conn;

 public function open(){
    $this->conn = new \mysqli($this->servername, $this->username, $this->password);
    if ($this->conn->connect_error) {
        die("Connection error: " . $this->conn->connect_error);
    }
 }

    public function create() {
        $sql = "CREATE DATABASE IF NOT EXISTS FitSprintUsers";
        if ($this->conn->query($sql) !== TRUE) {
            die("Error when creating the database: " . $this->conn->error);
        }else{
            echo "The database has been successfully created<br>";
        $this->conn->select_db("FitSprintUsers");
           $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                surname VARCHAR(50) NOT NULL,
                 email VARCHAR(50) NOT NULL,
                password VARCHAR(50) NOT NULL
            )";
            
            if ($this->conn->query($sql) !== TRUE) {
                die("Error when creating the table: " . $this->conn->error);
            }
            
            echo "The table was successfully created";
        }
        
    }
public function close(){
    $this->conn->close();
}

}
$users = new Users();
$users->open();
// $users->create();
// $users->close();
?>
