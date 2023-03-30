<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeDataTrading extends Model
{
    use HasFactory;
    public $table = 'home_data_trading';
    protected $fillable = ['data_en', 'data_ar', 'created_at', 'updated_at'];
}
