<?php
include("../res/x5engine.php");
$nameList = array("48w","3xy","wm4","sa4","aay","fk2","62j","38h","fcl","ufr");
$charList = array("S","J","W","N","U","G","J","P","4","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
