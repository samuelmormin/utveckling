<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Utveckling.fr</title>
    <link rel="stylesheet" href="<?= URL ?>assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">
    
</head>
<body>
    <header>
        <div class="header">
            <img class="logo" src="assets/img/logo_utveckling.png" alt="Utveckling.fr">
            <div class="menu-hamburger-container">
                <img class="menu-hamburger" src="assets/img/menu_icon.png" alt="Menu">
                MENU
            </div>
        </div>
        <?php
            include 'views/partials/menu.php';
        ?>
    </header>