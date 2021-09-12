<?php
class recentWorks{
    private $con;
    private $table_name = "works";
    
    public $id;
    public $image;
    public $name;

    public function __construct($db){
        $this->con = $db;
    }
    function readAll(){
        $query = "SELECT id, image, name
                    FROM " . $this->table_name . "
                    ORDER BY
                        name ASC
                        ";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function countAll(){
        $query = "SELECT id FROM " . $this->table_name . "";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();
        return $num;
    }

}
?>