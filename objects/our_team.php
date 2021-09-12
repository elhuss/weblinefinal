<?php
class ourTeam{

    private $table_name = "team";
    private $con;

    public $id;
    public $name;
    public $job_title;
    public $email;
    public $image;
    public $facebook;
    public $twitter;
    public $linkedin;

    public function __construct($db)
    {
        $this->con = $db;
    }

    function readAll(){
        $query = "SELECT id, name, jop, email, image, facebook, twitter, linkedin
                    FROM " . $this->table_name . "
                    ORDER BY
                        name ASC
                        ";
        $stmt2 = $this->con->prepare($query);
        $stmt2->execute();
        return $stmt2;
    }
    function countAll(){
        $query = "SELECT id FROM " . $this->table_name . "";
        $stmt2 = $this->con->prepare($query);
        $stmt2->execute();
        $num = $stmt2->rowCount();
        return $num;
    }
}
?>