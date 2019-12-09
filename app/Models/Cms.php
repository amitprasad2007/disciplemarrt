<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $table = "cms";
    protected $primaryKey = "id";
    
    protected $fillable = ['url_key','page_name','content'];
}
