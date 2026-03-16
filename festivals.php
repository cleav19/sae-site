<?php
include 'include/twig.php';
$twig = init_twig();
include 'include/data.php';

echo $twig->render('festivals.twig', [
    'mes_concerts' => $concerts,
    'mes_festivals' => $festivals,
]);