<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHeaderImage extends Model
{
    use HasFactory;
    public $table = 'about_header_image';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
