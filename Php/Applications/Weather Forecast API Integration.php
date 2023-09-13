<!DOCTYPE html>
<html>
<head>
    <title>PHP Weather Forecast</title>
</head>
<body>
    <h2>Weather Forecast</h2>
    <form method="post" action="">
        <input type="text" name="city" placeholder="Enter city name" required>
        <input type="submit" name="getWeather" value="Get Weather">
    </form>

    <?php
    if(isset($_POST['getWeather'])){
        $apiKey = 'YOUR_API_KEY_HERE'; // Replace with your actual API key
        $city = $_POST['city'];
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

        $response = file_get_contents($url);
        $data = json_decode($response);

        if(isset($data->main->temp)){
            $temperature = round($data->main->temp - 273.15, 2); // Convert to Celsius
            $description = $data->weather[0]->description;
            echo "Current Temperature in $city: $temperature°C<br>";
            echo "Weather: $description";
        }
        else{
            echo "City not found.";
        }
    }
    ?>
</body>
</html>
