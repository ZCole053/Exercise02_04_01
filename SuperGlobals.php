<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Super Globals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>
<body>
<h2>SuperGlobal</h2>
<?php
echo "<h3>Superglobal Array \$_SERVER[]</h3>";
echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br></p>";
echo "<p>This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br></p>";
echo "<p>This script was requested with the following server protocol ", $_SERVER["SERVER_PROTOCOL"], "<br></p>";
echo "<p>This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br></p>";
echo "<p>This script is running on the following server address: ", $_SERVER["SERVER_ADDR"], "<br></p>";
echo "<p>This script is running with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br></p>";
echo "<p>This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"], "<br></p>";
?>
    
</body>
</html>