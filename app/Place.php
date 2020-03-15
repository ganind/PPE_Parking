<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Place extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'num_place',
        'disponible'
    ];

    //définir relation entre le modèle Reservation
    public function reservation() {
        return $this->belongsTo("'App\Reservation");
    }
}
