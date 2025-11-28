<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'poste','entreprise','lieu','date_debut','date_fin',
        'description','type'
    ];
}
