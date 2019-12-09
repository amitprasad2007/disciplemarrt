<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = "coupons";
    protected $primaryKey = "id";
    
    protected $fillable = ['code','validity_start_date','validity_end_date','discount_type',
                           'discount','message','is_active','is_deleted'];
}
