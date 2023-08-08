<?php
require_once("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader('templates');

$twig = new \Twig\Environment($loader, [
    'cache' => 'var/cache',
]);

$data = [
    "name" => "Jean",
    "langages" =>[
        "HTML 5",
        "CSS 3",
        "JavaScript",
        "PHP",
    ]
];

echo $twig->render('index.html.twig', $data);
