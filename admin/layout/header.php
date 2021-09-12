<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketing Web</title>
    <link href="libs/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="libs/css/main.css" rel="stylesheet">
    <link href="libs/css/res-main.css" rel="stylesheet">
    <!-- set the page title, for seo purposes too -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Front"; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />

    <!-- admin custom CSS -->
    <link href="<?php echo $home_url . "libs/css/customer.css" ?>" rel="stylesheet" />

</head>
<body>
<?php include_once 'navbar.php'; ?>
<!-- container -->
<div class="container">
    <?php
    // if given page title is 'login' , do not display the title
    if($page_title!="login"){
    ?>
    <div class='col-md-12'>
        <div class='page-header'>
        <h1><?php echo isset($page_title) ? $page_title :"" ?></h1>
        </div>
    </div>
    <?php
    }
    ?>
</div>
