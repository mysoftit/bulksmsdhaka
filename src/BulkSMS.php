<?php
namespace mysoftit\bulksmsdhaka;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
class BulkSMS
{
    private $apiUrl = 'https://bulksmsdhaka.com/api/';
    private $apiKey;
    public function __construct()
    {
        $this->apiKey = env('BULKSMSDHAKA_API_KEY');
    }
    //
    //Get Balance Your SMS Portal
    public function sendSMS($message, $number)
    {
        // check api key is True
        if (empty($this->apiKey)) {
            throw new \Exception('API key is required in .env file');
        }
        $url = "{$this->apiUrl}/sendtext?apikey={$this->apiKey}&callerID=1234&number={$number}&message={$message}";

        $response = $this->responseRequest('POST', $url);
        return $response;
    }
    public function getBalance()
    {
        // check api key is True
        if (empty($this->apiKey)) {
            throw new \Exception('API key is required in .env file');
        }
        $url = "{$this->apiUrl}/getBalance?apikey={$this->apiKey}";

        $response = $this->responseRequest('GET', $url);
        return $response;
    }

    //Response request in api return
    private function responseRequest($method, $url)
    {
        $client = new Client();

        $options = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
        ];

        if ($method === 'GET') {
            $response = $client->get($url, $options);
        } else {
            $response = $client->post($url, $options);
        }

        return json_decode($response->getBody(), true);
    }
}
