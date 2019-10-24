

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form method="POST">
        <h4>Login:<input type="text"name="firstName"></h4>
        <h4> Heslo:<input type="password"name="secret"></h4>
        <input type="submit" name="Prihlasit" value="Prihlasit" />
    </form>
    ...

</div>
</body>
</html>
<?php
session_start();
echo 'POST: ';
var_dump($_POST);
echo '<br>POST: ';
var_dump($_POST);
if ($_POST['login'] == "admin" && $_POST['password'] == "top-secret") {{
    session_start();
    $_SESSION["prihlaseni"] = true; }
    if (isset($_SESSION["prihlaseni"])) {
        echo "Pokračovat do administrace";
    } else {
        echo "Chybné jméno nebo heslo";
    }}