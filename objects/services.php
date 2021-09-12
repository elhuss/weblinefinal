<?php
class Services{
    private $con;
    private $table_name = "services";

    public $id;
    public $name;
    public $description;
    public $image;

    public function __construct($db)
    {
        $this->con = $db;
    }
    function readAll(){
        $query = "SELECT id, name, description, image
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