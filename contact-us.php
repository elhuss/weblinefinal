
    <?php include('layout/header.php');?>     
    <div style="clear: both"></div>  
        <div class="content">
            <div class="how_cont">
                <h2>how to reach us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <div class="our_loc">
                <div class="g_map" id="g_map"></div>
            </div>

            <div class="cont_form">
                <form action="contact-messages.php" method="post"> 
                    <h2>drop your message</h2>
                    <input type="text" placeholder="Name" name="name" class="input_s" required ><br>
                    <input type="email" placeholder="E-Mail" name="email" class="input_s" required><br>
                    <input type="tele" placeholder="Phone" name="phone" class="input_s" required><br>
                    <input type="text" placeholder="Company Name" name="company" class="input_s" required><br>
                    <input type="text" placeholder="Message" id="mess" name="message" required> <br>
                    <button>Send</button>
                </form>
                <div class="cont_info">
                    <h2>contact us</h2> <br>
                    <i class="fas fa-map-marker-alt"></i><span> 1537 Flint Street Tumon , MP 96911 </span> <br>
                    <i class="fas fa-mobile-alt"></i><span> +200123456789 - +200198765432</span> <br>
                    <i class="fas fa-envelope"></i><span>info@webline.com</span> <br>
                
                </div>
            </div>
        </div> 
        <div style="clear: both"></div> 
        <?php include('layout/footer.php');?>
    </div>