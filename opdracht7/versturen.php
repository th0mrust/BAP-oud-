<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/versturen.css">
    <title>Nieuwsbrief - Mail versturen</title>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>Mail versturen</h2>
<a href="index.php">Klik hier om terug te gaan naar de homepagina</a><br><br>

<form method="post" action="verwerk_mail.php">
    <label>Bericht:<textarea name="Text1" cols="40" rows="5"></textarea></label><br>
    <label>Onderwerp:<input type="text" name="subject"/></label><br>
    <label>Wachtwoord:<input type="password" name="password"</label><br>
    <input type="submit" name="submit" value="Doe ut!"/>
</form>
</body>
</html>