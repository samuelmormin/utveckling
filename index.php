<?php

// Config
include 'config.php';

// Routing
$q = !empty($_GET['q']) ? $_GET['q'] : '';

if($q === '' || $q === 'home')
{
    $page = 'home';
}
else if($q === 'a-propos')
{
    $page = 'a-propos';
}
else if($q === 'services')
{
    $page = 'services';
}
else if($q === 'process')
{
    $page = 'process';
}
else if($q === 'derniers-projets')
{
    $page = 'derniers-projets';
}
else if($q === 'blog')
{
    $page = 'blog';
}
else if($q === 'nous-contacter')
{
    $page = 'nous-contacter';
}
else
{
    $page = '404';
}

// Includes
include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';