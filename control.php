<?php

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

$title = "Pretest Praktikum A2-Pagi";
$home = "index.php";
$portofolio = "portofolio.php";
$about = "about.php";
// echo $curPageName;
// echo $home;
function isActive($target){
	if ($curPageName == $target) {
		return " active";
	}
}

?>