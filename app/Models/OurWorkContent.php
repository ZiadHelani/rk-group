<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWorkContent extends Model
{
    use HasFactory;
    public $table = 'our_work_content';
    protected $fillable = ['title_en', 'title_ar', 'desc_en', 'desc_ar', 'image', 'created_at', 'updated_at'];
}
