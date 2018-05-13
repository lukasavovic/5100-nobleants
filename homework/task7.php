<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $what_is_it = "string";
        echo "Value is " . gettype($what_is_it);
        echo  "<br>";

        $what_is_it = 5.1;
        echo "Value is " . gettype($what_is_it);
        echo  "<br>";

        $what_is_it = true;
        echo "Value is " . gettype($what_is_it);
        echo  "<br>";

        $what_is_it = 5;
        echo "Value is " . gettype($what_is_it);
        echo  "<br>";

        $what_is_it = null;
        echo "Value is " . gettype($what_is_it);
    ?>
</body>
</html>