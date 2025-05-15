<?php
class ApiClient {
    private $url;
    private $token;
    private $headers;

    public function __construct($url, $token = null) {
        $this->url = $url;
        $this->token = $token;
        $this->headers = ['Content-Type: application/json'];
    }

    private function makeRequest($method, $endpoint, $data = null) {
        $url = $this->url . $endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //Применение токена
        if ($this->token) {
            $this->headers[] = "Authorization: Bearer {$this->token}";
        }
    
        //Настройка
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
        } elseif ($method !== 'GET') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        }
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        //Ошибки
        if ($httpCode >= 400) {
            throw new Exception("API Error: $httpCode");
        }
        if ($error) {
            throw new Exception("Error: $error");
        }

        return json_decode($response, true);
    }

    public function getRequest($endpoint) {
        return $this->makeRequest('GET', $endpoint);
    }

    public function postRequest($endpoint, $data) {
        return $this->makeRequest('POST', $endpoint, $data);
    }

    public function putRequest($endpoint, $data) {
        return $this->makeRequest('PUT', $endpoint, $data);
    }

    public function deleteRequest($endpoint) {
        return $this->makeRequest('DELETE', $endpoint);
    }
?>