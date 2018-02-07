<?php
include 'config.php';
if(isset($_POST['submit'])){
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];
    $query = "INSERT INTO nieuwsbrief VALUES (0, '$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
    $result = mysqli_query($dbc,$query) or die ('De query is mislukt.');
    $dbc_closed = mysqli_close($dbc);
    if ($result) {
        echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
        echo $voornaam . '<br>';
        echo $tussenvoegsel . '<br>';
        echo $achternaam . '<br>';
        echo $mailadres . '<br>';
    } else {
        echo 'Sorry, er is iets mis gegaan. Probeer het opnieuw.';
    }
} else {
    echo 'Je hebt geen toegang';
}
?>
<br>
<a href="index.php">Klik hier om terug te gaan naar de homepagina</a><br><br>