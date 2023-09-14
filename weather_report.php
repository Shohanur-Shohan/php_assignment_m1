<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<?php

    $temperature = 30;

    if ($temperature <= 0) {
        echo "<h3>It's freezing!</h3>";
        
    } elseif ($temperature > 0 && $temperature <= 25) {
        echo "<h3>It's cold.</h3>";
    } elseif ($temperature > 25) {
        echo "<h3>It's too hot.</h3>";
    }
    ?>
</body>
</html>
