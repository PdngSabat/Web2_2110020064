<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello Bagus - 2110020064</title>
</head>

<body>
    <h1>Selamat Datang di web <?= $nama; ?> - <?= $npm; ?></h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>

</body>

</html>