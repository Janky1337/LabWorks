<?php
//GET-запрос с кастомными HTTP-заголовками
function getRequestWithCustomHeaders($url, $headers) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response . "\n";
}

//Отправка JSON-данных в теле запроса
function postJsonData($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo json_decode($response, true) . "\n";
}

//Отправка запроса с параметрами URL-запроса
function getRequestWithUrlParameters($url, $params) {
    $query = http_build_query($params);
    $setUrl = $url . '?' . $query;
    $ch = curl_init($setUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo json_decode($response, true) . "\n";
}
?>