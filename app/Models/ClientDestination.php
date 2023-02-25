<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDestination extends Model
{
    use HasFactory;
    protected $table = 'clients_destination';
    protected $fillable = [
        'client_id', 'destination_id'
    ];
    /**
     * Get the user that owns the ClientDestination
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function clients(): belongsToMany
    {
        return $this->belongsToMany(Client::class);
    }
}
