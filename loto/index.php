<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<body>
<?php

    $loto = range(1, 49);
    var_dump($loto);
?>

<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique AVANT affichage
// -------------------------------------------------------
// (exemple)
$NbrCol = 10;

// -------------------------------------------------------
// nombre de cellules à remplir
$NbData = count($loto);
// -------------------------------------------------------
// calcul du nombre de lignes
if (round($NbData/$NbrCol)!=($NbData/$NbrCol)) {
	$NbrLigne = round(($NbData/$NbrCol)+0.5);
} else {
	$NbrLigne = $NbData/$NbrCol;
}
// -------------------------------------------------------
// affichage de la table loto
if ($NbData != 0) 
{
	$k = 0; // indice du tableau
?>
	<table border="1">
	<tbody>
<?php
	for ($i=1; $i<=$NbrLigne; $i++) 
	{
		// ligne $i
?>
		<tr>
<?php		for ($j=1; $j<=$NbrCol; $j++) 
		{ // colonne $j
			if ($k<$NbData) {
?>
			<td>
<?php			// -------------------------
			// DONNEES A AFFICHER dans la cellule
			echo $loto[$k];
			// -------------------------
?>
			</td>
<?php
				$k++;
			} else { // empty cell
?>
			<td></td>
<?php
			}
		}
?>
		</tr>
<?php	}
?>
	</tbody>
	</table>
<?php
} else { ?>
	pas de données à afficher
<?php
}
?>



<!-- Create an array of 5 random integers -->
<!-- je mélange le tableau $loto et j'affiche le tableau de 5 valeurs  -->

<!-- <?php

    shuffle($loto);
    echo '<br>';
    echo '<table border="1"><tr>';

        for($i=1;$i<=5;$i++){    
                 echo '<td>'.$loto[$i].'</td>';
        }

        echo '</tr></table>';
?>  -->


<?php echo '<br>'?>
	<table border="1">
	<tr>
        <?php for($i=0;$i<=5;$i++): ?>

                <td><?php echo $loto[$i]; ?></td>

        <?php endfor; ?>
    </tr>
	</table>


<!-- Création d'une fonction qui renvoie un tableau de 5 valeurs aléatoires entre 1 et 49 -->

<?php

function tirage()
	{   $loto = range(1, 49);
		shuffle($loto);

			echo '<table border="1"><tr>';
			for($i=0;$i<=4;$i++){

				echo '<td>'.$loto[$i].'</td>';
			}

				echo '</tr></table>';
		$output = array_slice($loto, 0, 5);  
		// var_dump($output);
		return ($output) ;
	}


$output = array();
for ($j=1;$j<=10;$j++)
	{  
	echo"<br>";
	$output[] = tirage (); 

	}
// var_dump($output);
?>

<!-- Afficher statistiques -->
	
<?php
// Possibilité avec un merge
// $tab = array_merge($output[0], $output[1], $output[2], $output[3], $output[4],$output[5], $output[6], $output[7], $output[8], $output[9]);
// var_dump($tab);
// $occurence = array_count_values($tab);
// arsort($occurence);
// var_dump($occurence);

$tablo = array();
foreach ($output as $tab) {
	foreach ($tab as $key => $value) {
		$tablo[] = $value;
       	}
}
// var_dump($tablo);
$occurence = array_count_values($tablo);
arsort($occurence);
// var_dump($occurence);

?>
<!-- Créer une combinaison de 5 chiffres, tester la combinaison lors des 10 tirages -->
<?php
// Combinaison de 5 chiffres $combi
$combi = array (23, 45, 12, 8, 34);

$tmp_gagne = "Vous avez perdu";
foreach ($output as $tab) {
	// foreach ($tab as $key => $value) {
		$result =  array_intersect($tab, $combi);
	// }
	var_dump($result);
	if (count($result)==5)
		{  
			$tmp_gagne = "Vous avez gagné";
		}
}

echo $tmp_gagne;


?>
 
</body>
</html>