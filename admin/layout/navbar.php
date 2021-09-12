
<header>
    <div class="side_menu">
    
    <i class="fas fa-align-justify" onclick="myFunction()"></i>
        <div id="myDropdown" class="dropdown-content">
        <a href="index.php">Home</a>

        </div>
    </div>
    <div class="logo"><h1>Web<b>Line</b></h1></div>
    <div class="menu">
        <a href="index.php">Home</a>
        <?php
            // login and logout options will be here 
            // check if users / customer was logged in
            // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
                ?>
                    <a href="<?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>">Edit Profile</a>

                    <a href="<?php echo $home_url; ?>logout.php">Logout</a>

                <?php
                // if user was not logged in, show the "login" and "register" options
                }else{
                    ?>
    
                        <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
                            <a href="<?php echo $home_url; ?>login"> Log In</a>
                      
                    
                         <?php echo $page_title=="Register" ? "class='active'" : ""; ?>
                            <a href="<?php echo $home_url; ?>register"> Register</a>
                    <?php
                    }
                    ?>
    </div>
    <!--    <div class="lang">
    <button  class="dropbtn" onclick="myFunction()">Dropdown</button>
        <select  id="lang">
            <i class="fas fa-align-justify" onclick="myFunction()"></i>
            <option value="english">EN</option>
            <option value="arabic">AR</option>
        </select> 
    </div> -->
    <div class="search">
        <input type="text" id="search" placeholder="Search">
        <a href=""> <i class="fa fa-search"></i> </a>
    </div>
</header>