<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>

<body>
    <?php
    $a = 6;
    $b = 8;
    if ($a >= $b)
        $max = $a;
    else
        $max = $b;
    echo "Max of $a and $b = $max.";

    $min = ($a <= $b) ? $a : $b;

    echo "<br>Min of $a and $b = $min.";
    ?>
</body>

</html>