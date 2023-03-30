<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeEngineering extends Model
{
    use HasFactory;
    public $table = 'home_engineering';
    protected $fillable = ['title_en', 'title_ar', 'image', 'created_at', 'updated_at'];
}
