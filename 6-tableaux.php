<?php

// tableau de base 
$array[0] = "PHP";
$array[1] = "HTML";
$array[2] = "CSS";

// tableau 
$array1 = ["PHP", "HTML", "CSS"];
$array2 = array("PHP", "HTML", "CSS");

// lire 
echo $array1[0] . '<br>';
echo $array1[1];

// print 
echo '<pre>';
print_r($array1);
echo '</pre>';

// tableau associatif 
$tableau = array(
    "langage-1" => "PHP",
    "langage-2" => "HTML",
    "langage-3" => "CSS",
);

// print 
echo '<pre>';
print_r($tableau);
echo '</pre>';

// foreach 
foreach($tableau as $table)
{
    echo $table . '<br>';
}

foreach($tableau as $key => $table)
{
    echo $key . ' => ' . $table . '<br>';
}
