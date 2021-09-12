
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Marketing Web</title>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/dash-style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="page">
        <header>
            <div class="logo"><h1>Web<b>Line</b></h1></div>
            <a class="logout_link" href="logout.php">Log Out</a>
        </header>   
        <div class="side_menu">
                <br><br>
                <a href="dashboard.php">orders</a> <br> <br>
                <a href="edit-work.php">edit works</a> <br> <br>
                <a href="edit-team.php">edit teams</a> <br> <br>
                <a href="edit-admin.php">admin info</a>
            </div>
        <div class="content">

            <h2>welcome to webline dashboard</h2> <br> <br><br><br>
            <div>
            <?php

                echo'<form action="add-admin.php" method="post">';


                if (isset($_POST['user'])==true && $_POST['user'] != "")
                {
                $x=$_POST['user'];
                $y=$_POST['new-user'];
                $z=$_POST['new-pass'];
                $a=$_POST['new-email'];
                require_once("includes/connect.php");
                $r=mysql_query("update admins set user='$y', pass='$z' , email='$a' where user='$x'");
                if($r=true)
                    header("Location: done.php");
                else
                    echo " failed";
                }
                else
                {
                echo'<input type="text" name="user" placeholder="Old Username" class="un_input">';echo"<br>";

                echo'<input type="text" name="new-user" placeholder="New Username" class="un_input">';echo"<br>";
                echo'<input type="text" name="new-pass" placeholder="New Password" class="un_input">';echo"<br>";
                echo'<input type="text" name="new-email" placeholder="New E-Mail" class="un_input">';echo"<br>";
                echo"<br>";
                echo'<input type="submit" value="Save"  class="btn_input">';
                }

                echo'</form>';

            ?>
        </div>
</div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/main.js"></script>        
    </body>
</html>

