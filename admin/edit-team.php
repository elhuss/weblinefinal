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

            <h2 style="margin-left:30px;">edit your team information</h2> <br> <br><br><br>
            <div class="our_team">
            <a href="add-team.php"><input type="button" value="Add" id="add_btn"></a> <br><br>
            <?php
                require_once("includes/connect.php");
                $r=mysql_query("select * from team");
                while($row=mysql_fetch_array($r))
                {    
                    echo"
                    <div class='member'>
                        <img src='assets/images/".$row['image']."' alt='Avatar' class='image'>
                        <div class='member_info'>
                        <span class='member_name'>".$row['name']."</span>
                        <p>".$row['jop']."</p>
                        <p>".$row['email']."</p>
                        <a href='".$row['facebook']."'><i class='fa fa-facebook'></i></a>
                        <a href='".$row['twitter']."'><i class='fa fa-twitter' ></i></a>
                        <a href='".$row['linkedin']."'><i class='fa fa-linkedin' ></i></a>
                        </div><br>
                        <a href='del-team.php?id=".$row['id']."'> Delete</a>    
                    </div>
                    ";  
                }
            ?>                                      
            </div>
</div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/main.js"></script>        
    </body>
</html>