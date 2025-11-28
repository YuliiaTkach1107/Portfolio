<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technologies';
    protected $fillable = [
        'name','category','level','logo',
        'color','display_order'
    ];

    public function projects(){
        return $this->belongsToMany(Project::class, 'project_technologies');
    }
}

