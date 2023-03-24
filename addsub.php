<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
    <style>
        .button {

            background-color: lightblue;
            box-shadow: 10px 10px 10px black;
        }


        .button:hover {

background-color: lightblue;
box-shadow: 10px 10px 10px green;
}

    </style>


</head>

<body>
    <center>
        <?php
        $a = 0;
        $b = 0;
        $result = 0;
        $ispostback = (isset($_REQUEST["check"])) ?
            true : false;
        if ($ispostback) {
            $a = $_REQUEST["a"];
            $b = $_REQUEST["b"];
            $cmd = $_REQUEST["cmd"];
            if ($cmd == "add")
                $result = $a + $b;
            if ($cmd == "sub")
                $result = $a - $b;
            if ($cmd == "mul")
                $result = $a * $b;
            if ($cmd == "div")
                $result = $a / $b;
        }



        ?>
        <form method="GET">

            <h1 style="background-color:tomato;">Calculator </h1>
            <input type="hidden" value="1 " name="check" />

            A<input type="number" value="<?php echo $a; ?>" name="a">
            <br>

            B<input type="number" value="<?php echo $b; ?>" name="b">
            <br>



            <input class="button" type="submit" name="cmd" value="add">
            <input class="button" type="submit" name="cmd" value="sub">
            <input class="button" type="submit" name="cmd" value="mul">
            <input class="button" type="submit" name="cmd" value="div">
            <br>

            <h2 style="background-color:green;">Result=
                <?php echo $result; ?>
            </h2>
        </form>
    </center>
</body>

</html>