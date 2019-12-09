<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supportticket extends Model
{
    protected $table = "support_tickets";
    protected $primaryKey = "id";
    
    protected $fillable = ['_token','user_id','ticket_id','subject','message','is_solved','is_active','is_deleted'];
}