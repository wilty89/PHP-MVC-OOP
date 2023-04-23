<?php

require __DIR__ . '../../../../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '');

$twig = new Environment($loader);

$user = [
    'name' => 'daniel guillermo',
    'lastname' => 'romero gelvez',
    'email' => 'daniel@ejemplo.com'
];


$online = true;


echo $twig->render('thrid.twig', compact('user', 'online'));

