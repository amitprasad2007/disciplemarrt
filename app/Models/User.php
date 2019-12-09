<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Sortable;
    
    public $sortable = ['id','name','email','mobile'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'name', 'email', 'phone_number', 'alternate_phone_number', 'password', 'address', 'city', 'state', 
        'country', 'zipcode', 'image', 'bank_name', 'acc_no', 'ifsc_code', 'branch_name', 'branch_code', 'company', 
        'pan_card_no', 'tds', 'documents', 'gstn_no', 'aadhar_card_photo', 'pan_card_photo', 'degree', 'pass_year', 
        'percentage', 'college', 'subject', 'short_desc', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
    
    public function getEmailForPasswordReset() {
        
    }

}
