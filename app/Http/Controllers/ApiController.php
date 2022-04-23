<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function index() {
        $apiURL = "https://restcountries.com/v3.1/all";

        $headers = [];
        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        dd($responseBody);
    }

    public function countryname($countryName) {
        $apiURL = "https://restcountries.com/v3.1/name/".$countryName;

        $headers = [];
        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        dd($responseBody);
    }

    public function capital($capital) {
        $apiURL = "https://restcountries.com/v3.1/capital/".$capital;

        $headers = [];
        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        dd($responseBody);
    }


}
