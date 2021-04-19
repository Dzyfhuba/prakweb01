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
    <h2 style="text-align: center;">About</h2>
    <div class="profile">
        <img class="profile-image" src=<?php echo "images/".$foto; ?> alt="avatar generic image" class="profile-photo">
        <div class="profile-text">
            <table>
                <tr>
                    <td><b>Nama</b></td>
                    <td>: </td>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>: </td>
                    <td><?php echo $jk; ?></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>: </td>
                    <td><?php echo $alamat.", ".$kecamatan.", ". $kabupaten.", ".$provinsi.", ".$kodepos; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>