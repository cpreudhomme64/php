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
        $tab = array(15,22);
        $tabCrochets = [15,22];
        var_dump($tab);
        var_dump($tabCrochets);
        $jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
        var_dump($jours);

//Accessing the aray
echo "<div>".$jours[2]."</div>";
echo "<div>".$jours[3]."</div>";

//Add an element 
array_push($jours, "Dimanche");
echo "<div>".$jours[6]."</div>";
var_dump($jours);

// Delete an element (the last)
$element = 'Dimanche';
unset($jours[array_search($element, $jours)]);
var_dump($jours);
echo "<div>".$jours[6]."</div>";

// array_shift delete the first element
$first = array_shift($jours);
var_dump($jours);
var_dump($first);

//array-slice return a portion of array
// $input = array("a", "b", "c", "d", "e");
 
// $output = array_slice($input, 2);		 // retourne "c", "d", et "e"
// $output = array_slice($input, -2, 1);	 // retourne "d"
// $output = array_slice($input, 0, 3);	  // retourne "a", "b", et "c"

$output = array_slice($jours, 0, 3);	
var_dump($output);

//array-splice
$mois = array("Janvier","Février");
$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

var_dump($jours);

$output = array_splice($jours, -2, 2, $mois);
var_dump($output);
var_dump($jours);

// The sort() function sorts an indexed array in ascending order.
$chiffre = array(2,7,5,3,80,45,23);
sort($chiffre);
var_dump($chiffre);

$lettre = array("j", "a", "w", "f", "m", "b");
sort($lettre);
var_dump($lettre);


    ?>
</body>
</html>