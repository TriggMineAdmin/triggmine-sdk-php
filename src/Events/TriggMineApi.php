<?php
namespace TriggMineSDK\Events;

require 'EventsRepository.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class TriggMineApi
{
    public $client;
    protected $apiUrl;
    protected $apiKey;

    public function __construct( $apiUrl, $apiKey )
    {
        $this->client = new Client([
            'base_uri' => $apiUrl,
            'defaults' => [
                    'headers' => [
                            'ApiKey'        => $apiKey,
                            'Authorization' => "auth-code"
                        ]
                ]
            ]);
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
    }
    
    public function SendEvent( $eventDto )
    {
        $response = "";
        
        $reflection = new \ReflectionClass( $eventDto );
        $method = EventsRepository::GetEventUrl( $reflection->getShortName() );

        try
        {
            $request = $this->client->request(
                'POST',
                'https://' . $this->apiUrl . $method,
                [
                        'headers' => [
                                'ApiKey'        => $this->apiKey,
                                'Content-Type'  => 'application/json',
                                'Authorization' => 'auth-code'
                            ],
                        'body' => json_encode( $eventDto )
                    ]
            );
            $response = array(
                'status' => $request->getStatusCode(),
                'body'   => $request->getBody()->getContents()
            );
        }
        catch ( RequestException $e )
        {
            // uncomment this to see the request content
            // echo Psr7\str( $e->getRequest() );
            if ( $e->hasResponse() )
            {
                echo 'Error: ' . Psr7\str( $e->getResponse() );
            }
        }

        return $response;
    }
}