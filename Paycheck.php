<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pay Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>
<body>
<?php
$input = array();

function calcPayrate(){

}

function validate($infoRecieved,$fieldName){
echo "$infoRecieved<br>";
echo $fieldName;
}

$input[] = validate($_POST['worked'],"Hours worked");
$input[] = validate($_POST['wage'],"Hourly wage");

?>    

</body>
</html>