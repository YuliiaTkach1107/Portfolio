<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';
    protected $fillable =['project_id','filename','original_name','path','is_main','display_order'];

    public function project(){
        return $this->belongTo(Project::class);
    }
}
