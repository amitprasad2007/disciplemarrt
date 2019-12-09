<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";
    protected $primaryKey = "id";
    
    protected $fillable = ['_token','user_id','course_id','name','rating','title','review','is_active','is_deleted'];
}
