<?php
namespace mysoftit\bulksmsdhaka;

class BulkSMS
{
    private $apiUrl = 'https://bulksmsdhaka.com/api/';
    private $apiKey;
    public function __construct()
    {
        $this->apiKey = env('BULKSMSDHAKA_API_KEY');
    }
    public function getBalance($name)
    {
        // check api key
        if (empty($this->apiKey)) {
            throw new \Exception('API key is required in .env file');
        }
        $url = "{$this->apiUrl}/getBalance";
        $params = ['api_key' => $this->apiKey];
        $response = $this->makeRequest('GET', $url, $params);
        return $this->handleResponse($response);
    }
}
