<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch-case </title>
</head>

<body>
    <?php
    $dayno = 3;
    switch ($dayno) {
        case 1:
            echo "Sun";
break;
        case 2:
            echo "Mon";
            break;
        case 3:
            echo "Tue";
            break;
        case 4:
            echo "Wed";
            break;
        case 5:
            echo "Thu";
            break;
        case 6:
            echo "Fri";
            break;
        case 7:
            echo "Sat";
            break;
        default:
            echo "Invalid";
            break;

    }





    ?>

</body>

</html>