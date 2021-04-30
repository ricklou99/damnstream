<?php

namespace App\Traits;


use GuzzleHttp\Client;

trait ConsumesExternalServices
{
    public function makeRequest($methods, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false)
    {
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);
        $response = $client->request($methods, $requestUrl, [
            $isJsonRequest ? 'json' : 'form_params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams
        ]);
        return $this->decodeResponse($response->getBody()->getContents());
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }
}
