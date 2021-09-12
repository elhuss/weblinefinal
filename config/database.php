<?php
class Database{
    private $host = "localhost";
    private $db_name = "webline";
    private $username = "root";
    private $password = "";
    public $con;
    public function getConnection(){
        $this->con = null;
        try{
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $e){
            echo "Connection Error : " . $e->getMessage();
        }
        return $this->con;
    }
}
?>