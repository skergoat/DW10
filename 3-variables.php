<?php 

// une variable 
$variable; 

// types de variables 
$message = "hello world";
$nombre = 35 ;
$decimal = 3.5 ;
$booleen = true; 
$null = NULL;

// valeurs des variables 
$username = "Stephane";
$username = "John";
// echo $username; 

// les guillemets 
$message = "j'aime le PHP";
$message = 'j\'aime le PHP';

$message = "je fais du dev 'backend' depuis 10 ans";
$message = 'je fais du dev "backend" depuis 10 ans';

$message = 'je fais du dev \'backend\' depuis 10 ans';
$message = "je fais du dev \"backend\" depuis 10 ans";

// la concatenation 
$message = "bonjour $username";
$message = 'bonjour ' . $username;

// echo $message;

// les calculs 
$result = 3 * 4;

$heuresDeTravail = 8;
$jourDeTravail = 5;

$result = $heuresDeTravail * $jourDeTravail;

echo $result;
