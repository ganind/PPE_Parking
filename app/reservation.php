<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class reservation extends Model
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
        'date_debut',
        'date_fin',
    ];
    //définir relation entre le modèle Place
    //une réservation peut avoir une seule place de parking
    public function place() {
        return $this->belongsTo('App\place');
    }
}
