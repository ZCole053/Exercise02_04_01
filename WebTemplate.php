<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Super Globals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>

<body>
    <?php
//bring in header
include("inc_header.html"); ?>
    <div style="width: 20%; text-align: center; float:left; ">
        <!-- bring in nav -->
        <?php include("inc_buttonnav.html"); ?>
    </div>
    <!-- start of dynamic content area -->
    <?php  
    if(isset($_GET['content'])){
        switch($_GET['content']){
            case 'About Me':
                include("inc_about.html");
                break;
            case 'Contact Me':
                include("inc_contact.html");
                break;
            case 'Home':
            //a value of home means to 
            //display the default page
            default:
                include("inc_home.html");
                break;
        }
    }else{
        include("inc_home.html");
    }
    ?>
    <!-- end of dynamic content area-->
    <!-- adding footer -->
    <?php include("inc_footer.php") ?>
</body>

</html>