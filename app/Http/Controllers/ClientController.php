<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientDestination;

class ClientController extends Controller
{
   public function storeClient( Request $request) {
       $data = json_decode($request->getContent(), true);
       $client = new Client;
       $client->fill($data);
       $client->save();
       $clientFound = Client::find(20);
       $clientFound->destinationsClients()->sync(
           [
               ['client_id'=>20, 'destination_id'=> 1  ]

            ]
        );
       return response()->json($data, 200);
   }

   public function storeClientDestination( Request $request) {
       $data = json_decode($request->getContent(), true);
       $client = new ClientDestination;
       $client->fill($data);
       $client->save();
       $client->clients()->sync([1]);
       return response()->json($data, 200);
   }
}
