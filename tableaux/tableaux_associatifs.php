<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");
//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");



var_dump($activites);
var_dump($pierre);

// modify activity of sunday
$activites["Dimanche"] = "Dormir";
var_dump($activites);

//
// $preferences = array();
$preferences = array_merge($pierre, $paul, $jacques);
var_dump($preferences);

$occurence = array_count_values($preferences);
arsort($occurence);
var_dump($occurence);







?>

</body>
</html>