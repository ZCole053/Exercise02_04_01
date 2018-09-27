<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Number Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>

<body>
    <h2>Number Form</h2>
    <?php
    //keep track on if it is displayed for user or not
    $displayForm = true;
    $number = "";
    //tell if a user has submitted
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        if(is_numeric($number)){
            $displayForm = false;
        }else{
            echo "<p>You need to enter a numeric value.</p>\n";
            $displayForm = true;
        }
    }
    if($displayForm){
?>
<form action="NumberForm.php" name="numberForm" method ="post" >
    <p>
        Enter a number: <input type="text" name="number" value="<?php echo $number;?>" >
    </p>
    <p>
        <input type="reset" value="Clear Form">&nbsp;&nbsp;
        <input type="submit" name="submit" value="Send Form">
    </p>
</form>

    <?php
    }else{
        echo "<p>Thank you for entering a number.</p\n>";
        echo "<p>Your number , $number, squared is " . ($number * $number). ".</p>\n";
        echo "<p><a href=\"NumberForm.php\">Try again?</a></p>\n";
    }
?>

</body>

</html>