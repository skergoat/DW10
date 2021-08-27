<?php 

// condition de base 
$ageDuCapitaine = 50;

if($ageDuCapitaine > 30)
{
    echo "qu'est-ce qu'il est vieux ! <br>";
}

// else
$ageDuCapitaine = 30;

if($ageDuCapitaine > 60)
{
    echo "qu'est-ce qu'il est vieux ! <br>";
}
else {
    echo "qu'est-ce qu'il est jeune ! <br>";
}

// else if
$ageDuCapitaine = 60;

if($ageDuCapitaine > 60)
{
    echo "qu'est-ce qu'il est vieux ! <br>";
}
elseif($ageDuCapitaine == 60)
{
    echo "il commence à être vieux.. <br>";
}
else {
    echo "qu'est-ce qu'il est jeune ! <br>";
}

// bool
$boolDuCapitaine = true;

if($boolDuCapitaine)
{
    echo "C'est vrai ! <br>";
}
else {
    echo "C'est faux ! <br>";
}

// OR AND
$ageDuCapitaine = 70;
$nomDuCapitaine = "robert";

if($ageDuCapitaine > 60 && $nomDuCapitaine == "robert")
{
    echo "qu'est-ce qu'il est vieux ! <br>";
}
else {
    echo "qu'est-ce qu'il est jeune ! <br>";
}

// switch 
switch($ageDuCapitaine)
{
    case 30:
        echo "c'est jeune pour être capitaine !";
    break;
    case 50:
        echo "c'est bien pour être capitaine !";
    break;
    case 70:
        echo "c'est vieux pour être capitaine !";
    break;
    default : 
        echo "vous n'avez pas l'âge d'être capitaine !";
}