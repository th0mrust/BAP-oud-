<?php
include 'config.php';
if(isset($_POST['submit'])) {
    $password = $_POST['password'];
    if ($password == "hoi") {
    } else {
        echo 'Je hebt een verkeerd wachtwoord ingevuld! Probeer het opnieuw.';
    }
} else {
    echo 'Je hebt geen toegang';
}
?>