<?php
if(isset($_GET['id'])){
    require_once("includes/connect.php");
    $x=$_GET['id'];
    $r=mysql_query("delete from works where id='$x'");
    header("Location: edit-work.php");

}else{
    header("Location: edit-work.php");
};


?>