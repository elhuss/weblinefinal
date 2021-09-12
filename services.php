<?php include_once 'layout/header.php'; 
//include db and objects and core
include_once 'config/core.php';
include_once 'config/database.php';
include_once 'objects/services.php';

//instantiate db and objects
$database = new Database();
$db = $database->getConnection();

$services = new Services($db);
// set page header
$page_title = "Services";
// query products
$stmt = $services->readAll();
//count all products in db to calc total pages
$total_rows = $services->countALL();
?>
    <div class="content">
            <div class="about_service">
                <h2>our services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
                et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div style="clear: both"></div>
            <?php
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<div class='service'>
                        <img src='libs/images/{$image}' alt=''/> <h3>{$name}</h3>
                        <p>{$description}</p>
                        <a href='contact-us.php'><input type='button' class='req_serv'value='join'></a>
                        </div>
                    </div>";
                    }
            ?>
            <div style="clear: both"></div>
    </div>
    <?php include_once 'layout/footer.php'; ?>