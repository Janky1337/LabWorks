<?php
require_once 'ApiClient.php';
$api = new ApiClient('https://jsonplaceholder.typicode.com/posts');

//Примеры
$getExample = $api->getRequest('');
echo "GET: " . $posts . "\n";

$postExample = $api->postRequest('', ['title' => 'Sample Title','text' => 'Sample Text','userId' => 1]);
echo "POST: " . $newPost . "\n";

$putExample = $api->putRequest('/12', ['title' => 'Sample Title', 'text' => 'Sample Text']);
echo "PUT: " . $updatedPost . "\n";

$deleteExample = $api->deleteRequest('/17');
echo "DELETE: " . $deleteResponse . "\n";
?>