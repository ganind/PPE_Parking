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

    //définit relation avec le modèle Place
    //une réservation peut avoir une seule place de parking
    private $id;

    public function place() {
        return $this->belongsTo('App\Place');
    }

    public function attente() {
        return $this->belongsTo('App\Attente');
    }
}
