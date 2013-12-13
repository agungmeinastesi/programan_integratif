<?php
if ($_GET["state"] == "state1")
	include "CSVtoXML.php";
else if($_GET["state"] == "state2")
	include "SQLtoXML.php";
else if($_GET["state"] == "state3")
	include "XMLtoXML.php";
?>