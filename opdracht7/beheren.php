<?php
include 'config.php';
$query = "SELECT voornaam, tussenvoegsel en achternaam FROM nieuwsbrief";
$result = mysqli_query($dbc, $query) or die ('De query is mislukt.');
?>