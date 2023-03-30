<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeaderImage extends Model
{
    use HasFactory;
    public $table = 'home_header_image';
    protected $fillable = ['image', 'title_en', 'title_ar', 'desc_en', 'desc_ar', 'created_at', 'updated_at'];
}
