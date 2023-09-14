<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div style="width: 50%; margin: 0 auto;">
        <h1 style="text-align: center;">Temperature Converter</h1>
        <form method="post">
            <label for="temperature">Enter Temperature:</label>
            <input type="text" id="temperature" name="temperature" required>
            <br><br>
            <label for="conversion">Select Conversion:</label>
            <select id="conversion" name="conversion" required>
                <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
            </select>
            <br><br>
            <button type="submit" >Convert temperature</button>
        </form>
    </div>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = floatval($_POST["temperature"]);
        $conversion = $_POST["conversion"];

        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        function fahrenheitToCelsius($fahrenheit) {
            return ($fahrenheit - 32) * 5/9;
        }

        if ($conversion == "celsiusToFahrenheit") {
            $convertedTemperature = celsiusToFahrenheit($temperature);
            echo "<p style='text-align: center;'>{$temperature}°C is equal to {$convertedTemperature}°F</p>";
        } elseif ($conversion == "fahrenheitToCelsius") {
            $convertedTemperature = fahrenheitToCelsius($temperature);
            echo "<p style='text-align: center;'>{$temperature}°F is equal to {$convertedTemperature}°C</p>";
        }
    }
    ?>
</body>
</html>
