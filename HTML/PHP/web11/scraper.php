<?php

    $city = $_GET["city"];
    $apiKey = "2091995d71e4a36bf53c3ddcfa7dea72";
    // $city = str_replace(" ", "-", $city);

    //@ 是用來忽略錯誤的
    // $contents = @file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
    $contents = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=".$city."&appid=".$apiKey."&lang=zh_tw");

    $contents = json_decode($contents, true);
    
    $cityName = $contents["city"]["name"];
    $description = $contents["list"][7]["weather"][0]["description"];
    $temprature = $contents["list"][7]["main"]["temp"] - 273.15;
    // print_r($temprature);

    $result = "城市:".$cityName." ,天氣狀況:".$description." ,溫度:".$temprature."°C";

    if($cityName != ""){
        echo $result;
    }
    
?>