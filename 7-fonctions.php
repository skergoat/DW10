<?php 

/***
 * fonctions PHP 
 */

// strlen 
$phrase = "bonjour, comment allez-vous ?";
$nombreDeCarateres = strlen($phrase);
echo $nombreDeCarateres . '<br>';

// str_shuffle 
$phrase = "bonjour, comment allez-vous ?";
$phraseMelangee = str_shuffle($phrase);
echo $phraseMelangee . '<br>';

// strtoupper 
$phrase = "bonjour, comment allez-vous ?";
$phraseMelangee = strtoupper($phrase);
echo $phraseMelangee . '<br>';
$phraseMelangee = strtolower($phrase);
echo $phraseMelangee . '<br>';

// date 
echo Date('d/m') . '<br>';

/**
 * Ecrire ses propres fonctions 
 */

 // sans param 
function direBonjour()
{
    echo "Bonjour ! <br>";
}

direBonjour();

// avec param 
function direAuRevoir($nom)
{
    echo "<p>Bonjour " . $nom . " ! </p>";
}

direAuRevoir("Stephane");
direAuRevoir("Jean");
direAuRevoir("Claude");