<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id', 'id');
    }
}
