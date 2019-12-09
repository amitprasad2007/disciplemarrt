<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = "advertisements";
    protected $primaryKey = "id";
    
    protected $fillable = ['title','description','image','link','is_active','is_deleted'];
}
