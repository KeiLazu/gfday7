<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memo extends Model
{
    protected $fillable = [
        'titlememo', 'containermemo', 
    ];
}
