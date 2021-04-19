<?php


include("profile.php");

$title = "Pretest Praktikum A2-Pagi";
$home = "index.php";
$portofolio = "portofolio.php";
$about = "about.php";
// echo $curPageName;
// echo $home;
function isActive($target){
	$currentRoute = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
	if ($currentRoute == $target) {
		echo " active";
	}
}

?>