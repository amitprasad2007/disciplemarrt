<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";
    //protected $primaryKey = "id";
    
    /*protected $fillable = ['title','email','phone','address','logo','fav_icon','login_bg',
                            'facebook_link','twitter_link','instagram_link','youtube_link',
                            'google_plus_link','meta_title','meta_keyword','meta_description'];*/
    
    protected $fillable = ['site_name','site_email','site_phone_number','gst','gstin','pan_no','hsn_sac_code','site_logo','site_favicon'];
}
