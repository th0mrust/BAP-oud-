<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <title>BAP Opdracht 5</title>

</head>
<body>

<h2>BAP - Opdracht 5 (Mailfunctie)</h2>

<form method="post" action="sendmail.php">
    <label>Afzender:
        <input type="email" name="from" placeholder="from" /></label>
    <br>
    <label>Onderwerp:
        <input type="text" name="subject" placeholder="subject" /></label>
    <br>
    <label>Bericht:
        <br>
        <textarea cols="100" rows="10" name="message"></textarea></label>
    <br>
    <input type="submit" name="submit" value="VERSTUUR!"/>
</form>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('.rw-contact-form').submit(function(e) {
            var sEmail = $('.rw-contact-form input[name="form[element4]"]').val();
            if (validateEmail(sEmail)) {
                //alert('Email is valid');
            }
            else {
                e.preventDefault();
                alert('Verkeerd email adres ingevoerd, probeer het opnieuw!');
            }
        });
    });
    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
</script>

<p style="color:#9ca2ad">Gemaakt door Thom rustemeijerx</p>
</body>
</html>