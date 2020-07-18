<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddressController extends Controller
{
    public function getAddress(Request $request, $cep)
    {
        $response = Http::get('http://serviceweb.aix.com.br/aixapi/api/cep/'.$cep);
        return $response->json();

    }
}
