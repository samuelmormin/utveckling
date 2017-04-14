<?php

// Config
include 'config.php';

// Routing
$q = !empty($_GET['q']) ? $_GET['q'] : '';

if($q === '' || $q === 'home')
{
    $page = 'home';
}
else if($q === 'services')
{
    $page = 'services';
}
else if($q === 'contact')
{
    $page = 'contact';
}
else if($q === 'grid')
{
    $page = 'grid';
}
else
{
    $page = '404';
}

// Includes
include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';