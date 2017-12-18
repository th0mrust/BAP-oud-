<?php

$voornaam = $_POST['voornaam'];

echo '<h1>Je voornaam is: ' . $voornaam . '</h1>';
echo "<h2>Wat leuk ik ken ook iemand die $voornaam heet</h2>";

$achternaam = $_POST['achternaam'];

echo '<h1>Je achternaam is:  ' . $achternaam . '</h1>';
echo "<h2>Ik heb nog nooit van de achternaam  $achternaam gehoord </h2>";

$woonplaats = $_POST['woonplaats'];

echo '<h1>Jij woont in ' . $woonplaats . '</h1>';
echo "<h2>Wat leuk ik woon ook in $woonplaats</h2>";