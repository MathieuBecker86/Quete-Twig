<?php

require_once '../vendor/autoload.php';

$products = ['Cocaine', 'Meth', 'Cannabis', 'Champignons', 'Crack'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['product' => $products]);

