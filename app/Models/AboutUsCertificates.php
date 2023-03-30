<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsCertificates extends Model
{
    use HasFactory;
    public $table = 'about_us_certificates';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
