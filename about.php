<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include "control.php";
        include "profile.php";
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <?php include "navbar.php" ?>
    <h2 style="text-align: center;">About</h2>
    <div class="profile">
        <img class="profile-image" src=<?php echo "images/".$data[7]; ?> alt="avatar generic image" class="profile-photo">
        <div class="profile-text">
            <table>
                <tr>
                    <td><b>Nama</b></td>
                    <td>: </td>
                    <td><?php echo $data[0]; ?></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>: </td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>: </td>
                    <td><?php echo $data[2].", ".$data[3].", ". $data[4].", ".$data[5].", ".$data[6]; ?></td>
                </tr>
                <tr>
                    <td><b>Umur</b></td>
                    <td>: </td>
                    <td><?php echo hitung_umur($data[8])[0]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
