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
        'disponible',
    ];

    //définir relation entre le modèle Reservation
    //une place peut contenir plusieurs réservations, mais pas au même temps
    public function reservation() {

        return $this->hasMany('App\Reservation');

    }
}
