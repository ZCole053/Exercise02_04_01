<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ProccesScholarship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>
<body>
<h2>Procces Scholarship 2</h2>
<?php
//keep track of error
    $errorCount = 0;

    function displayRequired($fieldName){
        echo "The field \"$fieldName\" is required!<br>\n";
    }

    //validate our input
    function validateInput($data, $fieldName){
        global $errorCount;
        if(empty($data)){
            displayRequired($fieldName);
            ++$errorCount;
            $retval = "";
        }else{
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
    }

    //sticky form
    function redisplayForm($firstName, $lastName){
    ?>
    
    <h2 style="text-align: center">Scholarship Form</h2>
    <form action="ProccesScholarship2.php" name="Scholarship" method="post">
                                                            <!-- adding php to remeber input -->
        <p>First name: <input type="text" name="fName" value="<?php echo $firstName; ?>"></p>
        <p>Last name: <input type="text" name="lName" value="<?php echo $lastName; ?>"></p>

        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" value="Send Form">
        </p>
    </form>

    <?php
    }
    //test to see rcieved form data
    $firstName = validateInput($_POST['fName'], "First Name");
    $lastName = validateInput($_POST['lName'], "Last Name");
    if($errorCount > 0){
        echo "$errorCount errors(s): please re-enter the information bellow.<br>\n";
        redisplayForm($firstName,$lastName);
    }else{
        echo "Thank you for filling out the scholarship form, ". $firstName . " ". $lastName . ".";
    }  
?>
    
</body>
</html>