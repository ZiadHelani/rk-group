<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWorkHeaderImage extends Model
{
    use HasFactory;
    public $table = 'our_work_header_image';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
