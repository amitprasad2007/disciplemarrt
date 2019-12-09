<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = "wish_lists";
    protected $primaryKey = "id";
    
    protected $fillable = ['user_id','course_id','is_active','is_deleted'];
}