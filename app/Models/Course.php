<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id";
    
    protected $fillable = ['user_id','secondary_user_id','category_id','sub_category_id','title','overview','curriculum','prerequisites','summary','duration','modules',
                           'delivery_medium','language','level','validity','price','offered_price','demo_video_title',
                           'demo_video_links','number_of_use_per_lecture','number_of_lectures','videotime_or_lecture','number_of_modules','number_of_module','content_medium','study_material_sample','certification_for_course','image','is_demand','is_active','is_deleted'];
}
