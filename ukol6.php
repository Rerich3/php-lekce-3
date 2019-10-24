
<form method="POST">
    <h3>Jmeno:<input type="text"name="firstName"></h3>
 <h3> Heslo:<input type="password"name="secret"></h3>
    <input type="checkbox" name="optIn" value="Souhlasim"> Souhlasim
    <input type="submit" name="Odeslat" value="Submit" />
</form>
<?php
echo 'POST: ';
var_dump($_POST);
echo '<br>POST: ';
var_dump($_POST);