<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'place_id',
        'rang_attente',
        'date_debut',
        'date_fin'
    ];

    //définir relation entre le modèle Place
    //une réservation peut avoir une seule place de parking
    public function place() {
        return $this->belongsTo('App\Place');
    }
}
