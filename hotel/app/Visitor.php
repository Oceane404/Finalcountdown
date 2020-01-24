<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{   
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'adresse', 'cp', 'password'];
    
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}

