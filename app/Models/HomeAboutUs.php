<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutUs extends Model
{
    use HasFactory;
    public $table = 'home_about_us';
    protected $fillable = ['image', 'text_en', 'text_ar', 'created_at', 'updated_at'];
}
