<?php
if(isset($_GET['id'])){
    require_once("includes/connect.php");
    $x=$_GET['id'];
    $r=mysql_query("delete from team where id='$x'");
    header("Location: edit-team.php");

}else{
    header("Location: edit-team.php");
};


?>