<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table =  'clients';

    protected $fillable = [
        'name', 'surname', 'dni','phone'
    ];

    public function destinationsClients()
    {
        return $this->belongsToMany(ClientDestination::class,'clients_destination','client_id','destination_id');
    }
}
