<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "control.php" ?>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php include "navbar.php" ?>
	<h2 style="text-align: center;">List Portofolio</h2>
	<div class="porto-content">
		<?php for($i = 0; $i < 10; $i++) { ?>
			<div class="porto-item">
				<div class="porto-title"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b></div>
				<div class="porto-desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<a class="button" href="#detail">Detail</a>
			</div>

		<?php } ?>
	</div>
</body>

</html>