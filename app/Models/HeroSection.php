<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    public $table = 'hero_section';
    protected $fillable = ['title_en', 'title_ar', 'desc_en', 'desc_ar', 'created_at', 'updated_at'];
}
