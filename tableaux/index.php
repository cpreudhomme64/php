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
        $hello = "Hello"; 
        //Afficher la variable $hello//
        $world = "World";

        echo "<div>La variable est ".$hello."</div>";

        echo "<div>".$hello.", ".$world." !</div>";

        $toto = $hello.", ".$world;
        echo "<div>".$toto."!</div>";

        $montantHt = 15.2;
        $montantTtc = $montantHt*1.20;
        echo "<div>Le montant TTC est  ".$montantTtc." euros</div>";



    ?>
</body>
</html>