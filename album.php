<?php
include 'include/twig.php';
$twig = init_twig();
include 'include/data.php';

echo $twig->render('albums.twig', [
    'mes_concerts' => $concerts,
    'mes_festivals' => $festivals,
    'mes_albums' => $albums ,
]);