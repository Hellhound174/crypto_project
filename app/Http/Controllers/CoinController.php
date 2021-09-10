<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class CoinController extends Controller
{
    /** @var Client */
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.coindesk.com/v1/']);
    }

    public function __invoke()
    {
        return (array) json_decode((string) $this->client->get('bpi/currentprice.json')->getBody());
    }

    



}










