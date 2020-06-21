<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
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
