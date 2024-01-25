<?php

    include __DIR__."/../vars.php";
    include __DIR__."/../text.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Stelle</th>
            <th>Distanza dal Centro</th>
        </tr>

        <?php
            foreach ($hotels as $hotel) {
                echo "<tr>";
                echo "<td>".$hotel['name'] . "</td>";
                echo "<td>".$hotel['description'] . "</td>";
                echo "<td>".($hotel['parking'] ? 'Sì' : 'No') ."</td>";
                echo "<td>".$hotel['vote']."</td>";
                echo "<td>".$hotel['distance_to_center']." km</td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>

</html>