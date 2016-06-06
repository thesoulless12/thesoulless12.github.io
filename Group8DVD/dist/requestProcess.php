<html>
<body>
<?php
$to = "benjamin.rainey@gmail.com";
$subject = "DVD Request";
$txt = "Hello world!";
$headers = "From: " . $_POST["custEmail"] . "\r\n"
echo $_POST["email"]
mail($to,$subject,$txt,$headers);
?>
</body>
</html>
