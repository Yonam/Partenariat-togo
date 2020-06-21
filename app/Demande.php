<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
    	'nom', 
    	'prenom',
    	'mail',
    	'telephone',
    	'secteur_activite',
    	'demande'
    ];
}
