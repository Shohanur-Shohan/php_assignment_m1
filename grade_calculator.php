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
        <label for="english">English:</label>
        <input type="number" name="english" required><br>

        <label for="bangla">Bangla:</label>
        <input type="number" name="bangla" required><br>

        <label for="math">Math:</label>
        <input type="number" name="math" required><br>

        <button type="submit" >Calculate</button>
    </form>
</div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $english = $_POST["english"];
        $bangla = $_POST["bangla"];
        $math = $_POST["math"];

        $average = ($english + $bangla + $math) / 3;
        $result = calGrade($average); 

        echo "<p style='text-align: center;'>Average: {$average}</p>";
        echo "<p style='text-align: center;'>Result: {$result}</p>";
    }

    function calGrade($average) {
        if ($average >= 80) {
            return 'A';
        } elseif ($average >= 70) {
            return 'B';
        } elseif ($average >= 60) {
            return 'C';
        } elseif ($average >= 40) {
            return 'D';
        } else {
            return 'F';
        }
    }
    ?>

</body>
</html>
