<?php


if(isset($_POST['loginn']))
{
    require_once("config/database.php");
    }
    else{
        header("../index.php");
    }

}

?>
<html>
    <head>
        <title>Admin Login</title>
    </head>
    <style>
    
    form{
        text-align:center;
        margin-top:200px;
    }
    .un_input{
        width:250px;
        height:30px;
        border-right:none;
        border-left:none;
        border-top:none;
        margin-bottom:20px;
        padding-left:10px;
    }
    .pass_input{
        padding-left:10px;
        border-right:none;
        border-left:none;
        border-top:none;
        width:250px;
        height:30px;
    }
    .btn_input{
        width:240px;
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
    .logo h1{
        font-size: 60px;
        color: #000;
    }
    .logo b{
    color: #3B5998;
    }
    form a{
        font-size:15px;
        text-decoration:none;
        color:#999;
    }
    </style>
    <body>
        
        <form action="index.php" class="login" method="post">
            <div class="logo"><h1>Web<b>Line</b></h1></div>
            <input type="text" name="usern" placeholder="Username" autocomplete="off" class="un_input"> <br>
            <input type="password" name="passw" placeholder="Password" autocomplete="new-pasword"class="pass_input"> <br>
            <input type="submit" value="LOGIN" name="loginn" class="btn_input"> <br> <br>
            <a href="">Forget Your Password</a>

        </form>
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script>
    $(function () {
        'use strict';
        //hide placeholder when foucs
        $('[placeholder]').focus(function () {
        $(this).attr('data-text' , $(this).attr('placeholder'));
        $(this).attr('placeholder' , '');    

        }).blur(function () {
            $(this).attr('placeholder' , $(this).attr('data-text'))
        })

    });

    
    </script>
</html>