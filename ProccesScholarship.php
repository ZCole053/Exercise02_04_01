<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ProccesScholarship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>
<body>
<h2>Procces Scholarship</h2>
<?php
    $firstName = stripslashes($_POST['fName']);
    $lastName = stripslashes($_POST['lName']);
    echo "Thank you for filling out the scholarship form, ". $firstName . " ". $lastName . ".";
?>
    
</body>
</html>