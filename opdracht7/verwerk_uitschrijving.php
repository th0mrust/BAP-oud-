<?php
include 'config.php';
if(isset($_POST['submit'])) {
    // MAIL OPHALEN:
    $mailadres = $_POST['mailadres'];
    // ALLES SELECTEREN UIT DATABASE:
    $query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";
    // QUERY UITVOEREN:
    $result = mysqli_query($dbc,$query) or die ('Error querying.');
    // OPHALEN RESULTAAT AANTAL RESULTATEN:
    $number_of_rows = mysqli_num_rows($result);
    // PRINTEN RESULTATEN AANTAL:
    if ($number_of_rows == 0) {
        echo 'Helaas het mailadres ' . $mailadres . ' staat niet in de database.<br><br>';
        echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen...</a><br><br>';
        exit();
    } else {
        echo 'Hoera! Het mailadres ' . $mailadres . ' is gevonden in de database!';
    }
    // VERWIJDEREN DATA UIT DATABASE:
    $query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";
    // QUERY UITVOEREN:
    $result = mysqli_query($dbc,$query) or die ('Error querying (DELETE).');
    // CONNECTIE SLUITEN:
    mysqli_close($dbc);
    // VERSLAG DOEN VAN HET RESULTAAT:
    echo ' Het mailadres ' . $mailadres . ' is verwijderd uit de database!<br><br>';
    echo '<a href="index.php">Klik hier om terug te keren naar de homepage</a><br><br>';
} else {
    echo 'Je hebt geen toegang';
}
if ($result) {
    echo 'Je bent succesvol uitgeschreven.';
}
/*
$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";
$dbc_closed = mysqli_close($dbc);
*/
?>
<br><br>
<a href="index.php">Klik hier om terug te gaan naar de homepagina</a><br><br>