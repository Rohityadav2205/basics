<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
    <style>
td{

    text-align: center;
    box-shadow: 5px 5px 5px black;
}

    </style>
</head>

<body>
    <table border="1" width="100%">
    <?php
    $n = 4;
    for ($i = 1; $i <= 10; $i++) {
        $result=$n*$i;

        echo "<tr><td>$n</td><td>X</td><td>$i</td><td>=</td><td>$result</td></tr>";

    }


    ?>
    </table>

</body>

</html>