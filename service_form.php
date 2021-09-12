<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>web design</title>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
    <?php include('includes/header.php');?>  
    <div style="clear: both"></div>   
  <div class="content">
    <form class="service_form">
        <h2>drop your message</h2>
        <input type="text" placeholder="Firs Name" class="input_s" required><br>
        <input type="text" placeholder="Last Name" class="input_s" required><br>
        <input type="email" placeholder="E-Mail" class="input_s" required><br>
        <input type="tele" placeholder="Phone" class="input_s" required><br>
        <input type="text" placeholder="Company Name" class="input_s" required><br>
        <input type="checkbox"  name="web_des" class="input_s">Web design <br>
        <input type="checkbox" name="web_des" class="input_s"> web development <br>
        <input type="checkbox" name="web_des" class="input_s"> social marketing <br>
        <input type="checkbox" name="web_des" class="input_s"> seo marketing <br>
        <input type="text" placeholder="Message" id="mess" required> <br>
        <button>Send</button>
    </form>
    <div style="clear: both"></div>  
  <?php include('includes/footer.php');?>
  </div>
        
    </body>
</html>