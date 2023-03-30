<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeDataEngineering extends Model
{
    use HasFactory;
    public $table = 'home_data_engineering';
    protected $fillable = ['data_en', 'data_ar', 'created_at', 'updated_at'];
}
