<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTrading extends Model
{
    use HasFactory;
    public $table = 'home_trading';
    protected $fillable = ['title_en', 'title_ar', 'image', 'created_at', 'updated_at'];
}
