<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = "chapters";
    protected $primaryKey = "id";
    
    protected $fillable = ['course_id','name','description','video','is_active','is_deleted'];
}
