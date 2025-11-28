<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table= 'formations';

    public $fillable = 
    ['diplome', 'etablissement','lieu','date_debut',
    'date_fin','description'
    ];

}
