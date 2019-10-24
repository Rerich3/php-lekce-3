<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Predmet</th>
            <th>Znamka</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $predmety = ['zemepis' => 1, 'dejepis' => 2 , 'biologie' => 4];
        foreach ($predmety as $klic => $hodnota) {
            echo "<tr>
                <td>$klic</td>
                <td>$hodnota</td>
                </tr>";
        $pocetZnamek = 0;
        $soucetZnamek = 0;
        $pocetZnamek++;
        $soucetZnamek += $hodnota;
        }
        ?>

        </tbody>
    </table>
    Průměr:
    <?php
    echo $soucetZnamek / $pocetZnamek;
    ?>
</div>
</body>
</html>