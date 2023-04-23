<?php

require __DIR__ . '../../../../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '');

$twig = new Environment($loader);


echo $twig->render('first.twig', ['name' => 'John Doe', 
    'occupation' => 'gardener']);