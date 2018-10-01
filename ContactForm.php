<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>

<body>
    <?php
// global variables
$showForm = true;
$errorCount = 0;
$sender = "";
$email = "";
$subject = "";
$message = "";

function validateInput($data,$fieldName){
    global $errorCount;
    if(empty($data)){
        echo "\"$fieldName\" is a required field.<br>\n";
        ++$errorCount;
        $retval = "";
    }else{
        $retval = trim($data);
        $retval = stripslashes($retval);
    }
    return $retval;
}

function validateEmail($data,$fieldName){
    global $errorCount;
    if(empty($data)){
        echo "\"$fieldName\" is a required field.<br>\n";
        ++$errorCount;
        $retval = "";
    }else{
        $retval = trim($data);
        $retval = stripslashes($retval);
        $pattern = "/^[\w-]+(\.[\w-]+)*@". "[\w-]+(\.[\w-]+)*". "(\.[a-z]{2,})$/i";
        if(preg_match($pattern,$retval)== 0){
            echo "\"$fieldName\" is not a valid e-mail address.<br>\n";
            ++$errorCount;
        }
    }
    return $retval;
}


function displayForm($sender,$email,$subject,$message){
?>
    <h2 style="text-aline:center">Contact Me</h2>
    <form action="ContactForm.php" name="contact" method="post">
        <p>Your name:<br><input type="text" name="Sender" value="<?php echo $sender;?>"></p>
        <p>Your E-mail: <br><input type="text" name="Email" value="<?php echo $email; ?>"></p>
        <p>Subject: <br><input type="text" name="Subject" value="<?php echo $subject; ?>"> </p>
        <p>Message: <br><textarea name="Message"><?php echo $message?></textarea></p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" name="Submit" value="Send Form">
        </p>
    </form>




<?php
}

if(isset($_POST['Submit'])){
    $sender = validateInput($_POST['Sender'], "Your Name");
    $email = validateEmail($_POST['Email'], "Your E-mail");
    $subject = validateInput($_POST['Subject'], "Subject");
    $message = validateInput($_POST['Message'], "Message");
    if($errorCount == 0){
        $showForm = false;
    }else{
        $showForm = true;
    }
}

if($showForm){
    if($errorCount > 0){
        echo "<p>Please re-enter the form information below.</p>\n";
    }
    displayForm($sender,$email,$subject,$message);
}else{
    $senderAddress = "$sender <$email>";
    $headers = "From: $senderAddress\nCC:$senderAddress";
    $result = mail("zcole053@west-mec.org", $subject,$message,$headers);

    if($result){
        echo "<p>Your message has been sent.Thank You, ". $sender . ".</p>\n";
    }else{
        echo "<p.There was an error sending your message, ". $sender. ".</p>\n";
    }
}
?>
</body>

</html>