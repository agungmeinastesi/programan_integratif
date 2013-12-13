<?php
// Tugas Pemrograman Integratif II3160
// Olivia - 18211014
// Ardian Indra Gunawan - 18211029
//echo ('test');
?>


<!DOCTYPE HTML>
<html> 
<body>

<?php
$state="";
$stateErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["state"]))
     {$stateErr = "State is required";}
	else
     {$state = test_input($_POST["state"]);}
}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

<form action="index2.php" method="get">
<h2> Tugas Pemrograman Integratif </h2>
<br><br>
Olivia/18211014 <br>
Ardian Indra Gunawan/18211029 <br>
<br>
Pilih state :
	<input type="radio" name="state" <?php if (isset($state) && $state=="state1") echo "checked"; ?>  value="state1">CSV to XML
	<input type="radio" name="state" <?php if (isset($state) && $state=="state2") echo "checked"; ?>  value="state2">SQL to XML
	<input type="radio" name="state" <?php if (isset($state) && $state=="state3") echo "checked"; ?>  value="state3">XML

<br><br>
<input type="submit" name="submit" value="Submit"> 

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $state;
?>

</body>
</html>