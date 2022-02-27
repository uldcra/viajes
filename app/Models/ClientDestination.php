<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDestination extends Model
{
    use HasFactory;
    protected $table = 'clients_destination';

    /**
     * Get the user that owns the ClientDestination
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clients(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
