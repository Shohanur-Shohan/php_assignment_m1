<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Number Checker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div style="width: 50%; margin: 0 auto;">
        <h1 style="text-align: center;">Even/Odd Num Checker</h1>
        <form method="post">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" required>
            <button type="submit">Check</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $inputNum = $_POST['number'];
            $result = calculate($inputNum);

            echo "<p style='text-align: center;'>$inputNum $result</p>";
        }

        function calculate($inputNum) {
            if ($inputNum % 2 == 0) {
                return 'is a even number.';
            } else {
                return 'is a odd nuber.';
            }
        }
        ?>
    </div>
</body>
</html>
