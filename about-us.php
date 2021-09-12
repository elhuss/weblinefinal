
    <?php include('layout/header.php');?>    
<div style="clear: both"></div>  
        <div class="content">
            <div class="about_webline">
                <h2>about webline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
                et dolore magna aliqua. Ut enim ad minim veniam</p>
                <img src="libs/images/team.jpg" alt="">
            </div>
            <div class="our_work">
            <?php
            include_once 'config/database.php';
            include_once 'objects/recent_works.php';
            include_once 'objects/our_team.php';

            //instantiate db and objects
            $database = new Database();
            $db = $database->getConnection();

            $recent_works = new recentWorks($db);
            $our_team = new ourTeam($db);
            // set page header
            $page_title = "About Us";
            // query products
            $stmt = $recent_works->readAll();
            $stmt2 = $our_team->readAll();
            // the page where this paging is used
            $page_url = "about_us.php?";
            //count all products in db to calc total pages
            $total_rows = $recent_works->countALL();
            $total_team = $our_team->countAll();
            include_once "recent_work.php";
            ?>
            
            </div>
            <div class="our_team">
            <?php
                echo "<div class='who'>our team</div>";
                echo"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>";
                while($row = $stmt2->fetch(PDo::FETCH_ASSOC))
                {    
                    extract($row);
                    echo"
                    <div class='member'>
                        <img src='assets/images/{$image}' alt='Avatar' class='image'>
                        <div class='member_info'>
                        <span class='member_name'>".$row['name']."</span>
                        <p>".$row['jop']."</p>
                        <p>".$row['email']."</p>
                        <a href='".$row['facebook']."'><i class='fa fa-facebook'></i></a>
                        <a href='".$row['twitter']."'><i class='fa fa-twitter' ></i></a>
                        <a href='".$row['linkedin']."'><i class='fa fa-linkedin' ></i></a>
                        </div>    
                    </div>";  
                }
            ?>                                      
            </div>
        </div> 
        <div style="clear: both"></div> 
        <?php include('layout/footer.php');?>
</div>
