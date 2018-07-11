<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 
    $json_url = "fromages.json";
    $json = file_get_contents($json_url);
    $data = json_decode($json);
    //verify you have your data
    var_dump($data);

    foreach($data as $key => $value){
        // echo $value->nom . ' ';
        // echo "<br>";
        // echo $value->type . ' ';       
        // echo $value->pays . ' ';
        // echo $value->classement . ' ';
        echo "Nom du fromage : ". $value->nom. "<br>". "Type du fromage : ".$value->type. "<br>". "Pays d'origine : ".$value->pays. "<br>". "Classement : ". $value->classement. "<br><br>";
    }
?>

</body>
</html>
