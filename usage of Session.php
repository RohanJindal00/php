<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["country"] = "India";
$_SESSION["religion"] = "Sanatana";
echo "Session variables are set.";
?>

</body>
</html>