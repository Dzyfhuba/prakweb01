<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "control.php" ?>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="style.css">
	<script src="sript.js"></script>
</head>

<body>
	<?php include "navbar.php" ?>
	<h2 style="text-align: center;">List Portofolio</h2>
	<div class="porto-content">
		<form action="" method="post" name="set_jumlah_porto">
			<div class="input-group mb-3">
				<select id="jumlah_porto" class="custom-select col-5" name="jumlah_porto">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5" selected="selected">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input type="submit" value="Sort" />
		</form>
	</div>
	</form>
	<?php for ($i = 0; $i < $jumlah_porto; $i++) { ?>
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