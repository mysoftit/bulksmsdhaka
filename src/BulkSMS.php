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
    public function getBalance()
    {
        // check api key
        if (empty($this->apiKey)) {
            throw new \Exception('API key is required in .env file');
        }
        $url = "{$this->apiUrl}/getBalance?apikey={$this->apiKey}";
        $client = new Client();
        $request = $client->request('GET', $url);
        $response = json_decode($request->getBody());
        return $response['Balance'];
    }

    private function makeRequest($method, $url)
    {
        $client = new Client();

        $options = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
        ];

        if ($method === 'GET') {
            $options[RequestOptions::QUERY] = $params;
            $response = $client->get($url, $options);
        } else {
            $options[RequestOptions::FORM_PARAMS] = $params;
            $response = $client->post($url, $options);
        }

        return json_decode($response->getBody(), true);
    }

    private function handleResponse($response)
    {
        if (isset($response['error']) && $response['error'] == 0) {
            return $response['data'] ?? $response['msg'];
        }

        // Log or handle the error as needed
        // For now, let's throw an exception with the error message
        throw new \Exception($response['msg'] ?? 'Unknown error');
    }
}
