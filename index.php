<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php
    // stringFunction

    $name = "hello Silju";
    // $output = strlen($name);
    // $output = str_word_count($name);
    // $output = strrev($name);
    // $output = strtolower($name);
    // $output = strtoupper($name);
    // $output = strpos($name, "Silju");
    // $output = str_replace("Silju", 'swapna', $name);
    $output = ucwords($name);
    echo $output;

    // mathFunction

    // $math = pi();
    // $math = min(10, 3, 44, 5);
    // $math = max(10, 3, 44, 5);
    // $math = abs(-10);
    // $math = sqrt(64);
    $math = rand();
    // $math = round(1.50);

    echo $math;
    ?>
</body>
</html>