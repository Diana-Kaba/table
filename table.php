<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблиця</title>
    <style>
        h2 {
            text-align: center;
        }

        table, tr, td {
            border: 1px solid black;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto;
        }

        img {
            width: 200px;
        }
    </style>
</head>
<body>
    <h2>3.6 Таблиця</h2>
    <?php
    $n = 15;

    echo "<table>";
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 !== 0) {
        echo "<tr><td>$i</td><td><img src=\"images/img_$i.jpg\"></td></tr>";
        }
    }
    echo "<table/>";
    ?>
</body>
</html>