<!doctype html>
<html lang="opdracht3">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hier een oefening in PHP</h1>
<?php
    $voornaam = 'Thom';
    $achternaam = 'Rustemeijer';
    $leeftijd = 17;
    $woonplaats = 'Driehuis';
    $email = 'T.rustemeijer@gmail.com';

    echo 'Mijn naam is ' . $voornaam . ' ' . $achternaam . ' ik ben ' . $leeftijd . ' jaar oud. Ik woon in ' . $woonplaats . ' en mijn E-mail is ' . $email ;
?>
<br> <br><br>
<?php
$leeftijd = 17;
    if ($leeftijd >=18){
        echo 'Jij bet oud genoeg om te drinken.';
    } else{
        echo 'Jij bent te jong om te drinken.';
    }


?>
</body>
</html>