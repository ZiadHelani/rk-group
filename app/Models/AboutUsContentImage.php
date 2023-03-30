<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContentImage extends Model
{
    use HasFactory;
    public $table = 'about_us_content_image';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
