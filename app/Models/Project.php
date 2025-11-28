<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable =[
        'title','slug','short_description','detailed_description',
        'type','status','date_realisation','client','context','duration',
        'role','project_link','github_link','display_order'

    ];

    public function technologies(){
        return $this->belongsToMany(Technology::class,'project_technologies');
    }

    public function images(){
        return $this->hasMany(ProjectImage::class);
    }
    public function mainImage(){
        return $this->hasOne(ProjectImage::class)->where('is_main',true);
    }
}
