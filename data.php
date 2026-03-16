<?php

// Album 1 : Batterie Faible
$baterie_faible = [
    'titre'    => 'Batterie Faible',
    'annee'    => 2016,
    'image'    => 'images/batterie-faible.jpg',
    'nb_vente' => 300000,
    'nb_titre' => 14,
    'duree'    => '39 min'
];

// Album 2 : Ipséité
$ipseite = [
    'titre'    => 'Ipséité',
    'annee'    => 2017,
    'image'    => 'images/ipseite.jpg',
    'nb_vente' => 950000,
    'nb_titre' => 14,
    'duree'    => '48 min'
];

// Album 3 : Lithopédion
$lithopedion = [
    'titre'    => 'Lithopédion',
    'annee'    => 2018,
    'image'    => 'images/lithopedion.jpg',
    'nb_vente' => 500000,
    'nb_titre' => 17,
    'duree'    => '55 min'
];

// Album 4 : QALF
$qalf = [
    'titre'    => 'QALF',
    'annee'    => 2020,
    'image'    => 'images/qalf.jpg',
    'nb_vente' => 500000,
    'nb_titre' => 14,
    'duree'    => '45 min'
];

// Album 5 : J'AI MENTI.
$jaimenti = [
    'titre'    => 'J\'AI MENTI',
    'annee'    => 2024,
    'image'    => 'images/jaimenti.jpg',
    'nb_vente' => 50000,
    'nb_titre' => 11,
    'duree'    => '33 min'
];

// Album 6 : BĒYĀH
$beyah = [
    'titre'    => 'BĒYĀH',
    'annee'    => 2025,
    'image'    => 'images/beyah.jpg',
    'nb_vente' => 180000,
    'nb_titre' => 15,
    'duree'    => '45 min'
];

// LISTE COMPLÈTE
$albums = [$baterie_faible, $beyah, $jaimenti, $qalf, $lithopedion, $ipseite];

// ==========================================================
// CATÉGORIE 2 : CONCERTS (BĒYĀH TOUR 2026)
// ==========================================================

$rouen = [
    'ville'    => 'Rouen',
    'pays'     => 'France',
    'salle'    => 'Zenith',
    'date'     => '02 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$caen = [
    'ville'    => 'Caen',
    'pays'     => 'France',
    'salle'    => 'Zenith',
    'date'     => '03 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$poitiers = [
    'ville'    => 'Poitiers',
    'pays'     => 'France',
    'salle'    => 'Arena Futuroscope',
    'date'     => '04 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$orleans = [
    'ville'    => 'Orléans',
    'pays'     => 'France',
    'salle'    => 'Arena',
    'date'     => '05 Avril 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$toulouse = [
    'ville'    => 'Toulouse',
    'pays'     => 'France',
    'salle'    => 'Zenith',
    'date'     => '07-08 Avril 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$clermont = [
    'ville'    => 'Clermont-Ferrand',
    'pays'     => 'France',
    'salle'    => 'Zenith d\'Auvergne',
    'date'     => '10 Avril 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$geneve = [
    'ville'    => 'Genève',
    'pays'     => 'International',
    'salle'    => 'Arena',
    'date'     => '11 Avril 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$brest = [
    'ville'    => 'Brest',
    'pays'     => 'France',
    'salle'    => 'Arena',
    'date'     => '16 Avril 2026',
    'complet'  => true,
    'prix'     => 49.70,
];

$nantes = [
    'ville'    => 'Nantes',
    'pays'     => 'France',
    'salle'    => 'Zenith',
    'date'     => '16-17 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$chambery = [
    'ville'    => 'Chambery',
    'pays'     => 'France',
    'salle'    => 'Le Phare',
    'date'     => '23 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$montpellier = [
    'ville'    => 'Montpellier',
    'pays'     => 'France',
    'salle'    => 'Zénith Sud',
    'date'     => '24 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$nice = [
    'ville'    => 'Nice',
    'pays'     => 'France',
    'salle'    => 'Palais Nikaïa',
    'date'     => '25 Avril 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$marseille = [
    'ville'    => 'Marseille',
    'pays'     => 'France',
    'salle'    => 'Le Dôme',
    'date'     => '25-26 Avril 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$bordeaux = [
    'ville'    => 'Bordeaux',
    'pays'     => 'France',
    'salle'    => 'Arkéa Arena',
    'date'     => '01-02 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$amneville = [
    'ville'    => 'Amnéville',
    'pays'     => 'France',
    'salle'    => 'Galaxie',
    'date'     => '06 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$strasbourg = [
    'ville'    => 'Strasbourg',
    'pays'     => 'France',
    'salle'    => 'Zénith',
    'date'     => '07 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$lausanne = [
    'ville'    => 'Lausanne',
    'pays'     => 'International',
    'salle'    => 'Arena',
    'date'     => '08 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$reims = [
    'ville'    => 'Reims',
    'pays'     => 'France',
    'salle'    => 'Arena',
    'date'     => '09 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$bruxelles = [
    'ville'    => 'Bruxelles',
    'pays'     => 'International',
    'salle'    => 'ING Arena',
    'date'     => '12-13 Mai 2026',
    'complet'  => true,
    'prix'     => 55.00,
];

$amiens = [
    'ville'    => 'Amiens',
    'pays'     => 'France',
    'salle'    => 'Zénith',
    'date'     => '15 Mai 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$lille = [
    'ville'    => 'Lille',
    'pays'     => 'France',
    'salle'    => 'Zénith',
    'date'     => '15-16 Mai 2026',
    'complet'  => true,
    'prix'     => 52.00,
];

$lyon = [
    'ville'    => 'Lyon',
    'pays'     => 'France',
    'salle'    => 'LDLC Arena',
    'date'     => '19-20 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$nancy = [
    'ville'    => 'Nancy',
    'pays'     => 'France',
    'salle'    => 'Zénith',
    'date'     => '22 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$dijon = [
    'ville'    => 'Dijon',
    'pays'     => 'France',
    'salle'    => 'Zénith',
    'date'     => '23 Mai 2026',
    'complet'  => false,
    'prix'     => 52.00,
    "site"     => "https://damso.com/billetterie"
];

$paris = [
    'ville'    => 'Paris',
    'pays'     => 'France',
    'salle'    => 'Paris La Défense Arena',
    'date'     => '27-30 Mai 2026',
    'complet'  => true,
    'prix'     => 59.00,
];

$montreal = [
    'ville'    => 'Montreal',
    'pays'     => 'International',
    'salle'    => 'Centre Bell',
    'date'     => '05 Juin 2026',
    'complet'  => false,
    'prix'     => 60.00,
    'site'     => "https://damso.com/billetterie",
];

// LISTE COMPLÈTE CONCERTS
$concerts = [
    $rouen, $caen, $poitiers, $orleans, $toulouse, $clermont, $geneve, $brest,
    $nantes, $chambery, $montpellier, $nice, $marseille, $bordeaux, $amneville,
    $strasbourg, $lausanne, $reims, $bruxelles, $amiens, $lille, $lyon, $nancy,
    $dijon, $paris, $montreal
];


// ==========================================================
// CATÉGORIE 3 : FESTIVALS (ÉTÉ 2026)
// ==========================================================

$aluna = [
    'titre' => 'Aluna Festival',
    'pays'  => 'France',
    'date'  => '26 Juin 2026',
    'lieu'  => 'Ruoms (Ardèche)',
    'prix'  => 62.00
];

$nimes = [
    'titre' => 'Festival de Nîmes',
    'pays'  => 'France',
    'date'  => '01 Juillet 2026',
    'lieu'  => 'Arènes de Nîmes',
    'prix'  => 73.00
];

$nuit_erdre = [
    'titre' => 'La Nuit de l\'Erdre',
    'pays'  => 'France',
    'date'  => '03 Juillet 2026',
    'lieu'  => 'Nort-sur-Erdre',
    'prix'  => 54.00
];

$fete_bruit = [
    'titre' => 'Fête du bruit',
    'pays'  => 'France',
    'date'  => '11 Juillet 2026',
    'lieu'  => 'Saint-Nolff',
    'prix'  => 60.00
];

$deferlantes = [
    'titre' => 'Les Déferlantes',
    'pays'  => 'France',
    'date'  => '13 Juillet 2026',
    'lieu'  => 'Le Barcarès',
    'prix'  => 69.00
];

$dour = [
    'titre' => 'Festival de Dour',
    'pays'  => 'International',
    'date'  => '18 Juillet 2026',
    'lieu'  => 'Dour (Belgique)',
    'prix'  => 75.00
];

$toulon = [
    'titre' => 'Son by Toulon',
    'pays'  => 'France',
    'date'  => '25 Juillet 2026',
    'lieu'  => 'Toulon',
    'prix'  => 55.00
];

$vandb = [
    'titre' => 'V and B Fest\'',
    'pays'  => 'France',
    'date'  => '21 Août 2026',
    'lieu'  => 'Château-Gontier',
    'prix'  => 56.00
];

$golden_coast = [
    'titre' => 'Golden Coast',
    'pays'  => 'France',
    'date'  => '28 Août 2026',
    'lieu'  => 'Dijon',
    'prix'  => 70.00
];

// LISTE COMPLÈTE FESTIVALS
$festivals = [$aluna, $nimes, $nuit_erdre, $fete_bruit, $deferlantes, $dour, $toulon, $vandb, $golden_coast];
?>