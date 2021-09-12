<?php
//include db and objects and core
include_once 'config/core.php';
include_once 'config/database.php';
include_once 'objects/recent_works.php';

//instantiate db and objects
$database = new Database();
$db = $database->getConnection();

$recent_works = new recentWorks($db);
// set page header
$page_title = "Read Products";
include_once "layout/header.php";
echo "<div style='clear: both'></div>";

// query products
$stmt = $recent_works->readAll();
// the page where this paging is used
$page_url = "index.php?";
//count all products in db to calc total pages
$total_rows = $recent_works->countALL();

//Slideshow container 
include_once "slider.php";
echo "<div style='clear: both'></div>";
// our featuers
include_once "our_features.php";
echo "<div style='clear: both'></div>";
//our recent work
include_once "recent_work.php";
echo "<div style='clear: both'></div>";
//our clients
include_once "our_clients.php";
echo "<div style='clear: both'></div>";

// set page footer
include_once "layout/footer.php";
?>