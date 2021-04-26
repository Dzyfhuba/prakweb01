<?php


include("profile.php");

$title = "Pretest Praktikum A2-Pagi";
$home = "index.php";
$portofolio = "portofolio.php";
$about = "about.php";
// echo $curPageName;
// echo $home;
function isActive($target)
{
	$currentRoute = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
	if ($currentRoute == $target) {
		echo " active";
	}
}

// echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
// echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
// echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
// echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>'


// $jumlah_porto = 5;

if (isset($_POST['jumlah_porto'])) {
	$jumlah_porto = $_POST['jumlah_porto'];
}
