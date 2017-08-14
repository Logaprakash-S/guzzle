<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class guzzlecontroller extends Controller
{
    function guzzle(){
    	$client = new Client();
$res = $client->request('GET', 'http://sfnumber.azurewebsites.net/api/city');
echo $res->getBody();

    }
}
