<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
   public function storeClient( Request $request) {
       $data = json_decode($request->getContent(), true);
       $client = new Client;
       $client->fill($data);
       $client->save();
       $client->destinationsClients()->sync([1]);
       return response()->json($data, 200);
   }
}
