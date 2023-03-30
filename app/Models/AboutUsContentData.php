<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContentData extends Model
{
    use HasFactory;
    public $table = 'about_us_content_data';
    protected $fillable = ['data_en', 'data_ar', 'created_at', 'updated_at'];
}
