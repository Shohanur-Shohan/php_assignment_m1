<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div style="width: 50%; margin: 0 auto;">
    <h1 style="text-align: center;">Simple Calculator</h1>
        <form method="post">
            <label for="num1">Enter the first number:</label>
            <input type="number" name="num1" required><br>

            <label for="num2">Enter the second number:</label>
            <input type="number" name="num2" required><br>

            <label for="operation">Select an operation:</label>
            <select name="operation" required>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select><br>

            <button type="submit">Calculate</button>
        </form>
    </div>
  

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p style='color:red;'>Error: Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p style='color:red;'>Invalid operation selected.</p>";
                break;
        }

        echo "<p style='text-align: center;'>The result is: $result</p>";
    }
    ?>
</body>
</html>
