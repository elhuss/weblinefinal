
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
   <style>
    form{
        margin-top:20px;
        text-align:center;
    }
    .input_file{
        width: 0.1px;
	    height: 0.1px;
	    opacity: 0;
	    overflow: hidden;
	    position: absolute;
	    z-index: -1;
    }
    label{
        height:25px;
        width:150px;
        font-size:18px;
        color: white;
        border-radius:10px;
        background-color: #999;
        display: inline-block;
        cursor: pointer;
    }
    .input_file:focus + label,
    .input_file + label:hover {
        background-color: #666;
    }
    .un_input{
        width:200px;
        height:30px;
        border:1px solid #3B5998;
        border-radius:10px;
        margin-top:20px;
        padding-left:10px;
    }
    .btn_input{
        width:150px;
        height:30px;
        margin-top:20px;
        border:none;
        border-radius:20px;
        color:#fff;
        background:#3B5998;  
    }
    .btn_input:hover{
        background:#3B5fff;
    }
   </style>
    <body>
        <div class="page">
        <header>
            <div class="logo"><h1>Web<b>Line</b></h1></div>
            <a class="logout_link" href="logout.php">Log Out</a>
        </header>   
        <div class="content">
            <div class="side_menu">
                <br><br>
                <a href="dashboard.php">orders</a> <br> <br>
                <a href="edit-work.php">edit works</a> <br> <br>
                <a href="edit-team.php">edit teams</a> <br> <br>
                <a href="edit-admin.php">admin info</a>
            </div>
            <h2>welcome to webline dashboard</h2> <br> <br><br><br>
            <div style="text-align: center; padding-top: 150px">
                    <?php

                    echo'<form action="done.php" method="post">';
                        echo'<span class="text1" >Successfully done </span><br>';
                        echo' <a href="dashboard.php"><input type="button" value="ok"  class="btn_input"></a>';
                    echo'</form>';
                    
        
                    ?>

            </div>
</div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/main.js"></script>        
    </body>
</html>

