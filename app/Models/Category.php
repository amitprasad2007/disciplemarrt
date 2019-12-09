<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    
    protected $fillable = ['parent_id','name','is_home','is_active','is_deleted'];
}
