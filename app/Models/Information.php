<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'personal_infos';

    protected $fillable = [
        'nom','titre','bio','photo','email','telephone','localisation',
        'disponibilite','cv','linkedin','github','twitter'
    ];

}
