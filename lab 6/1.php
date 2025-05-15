<?php
//GET
function getRequest($postId) {
    $url = 'https://jsonplaceholder.typicode.com/posts/'.$postId;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response . "\n";
}

//POST
function postRequest($title = 'Sample Title', $text = 'Sample Text', $userId = 0){
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $ch = curl_init($url);
    $data = [
        'title' => $title,
        'body' => $text,
        'userId' => $userId
    ];
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response . "\n";
}

//PUT
function putRequest($postId, $title = "Sample Title", $text = "Sample Text"){
    $url = 'https://jsonplaceholder.typicode.com/posts/'.$postId;
    $ch = curl_init($url);
    $data = [
        'title' => $title,
        'body' => $text
    ];
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response . "\n";
}

//DELETE
function deleteRequest($postId){
    $url = 'https://jsonplaceholder.typicode.com/posts/'.$postId;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response . "\n";
}

getRequest(69);
postRequest();
putRequest(12);
deleteRequest(5);
?>