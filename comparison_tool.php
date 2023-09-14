<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<div style="width: 50%; margin: 0 auto;">
    <h1 style="text-align: center;">Grade Calculator</h1>
    <form method="post">
        <label for="number1">First Number:</label>
        <input type="number" name="number1" required><br>

        <label for="number2">Second Number:</label>
        <input type="number" name="number2" required><br>

        <button type="submit" >Submit</button>
    </form>
</div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
    
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
    
        echo "<p style='text-align: center;'>The larger number is: $largerNumber</p>";
    }
?>
</body>
</html>
