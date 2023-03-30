<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsTouch extends Model
{
    use HasFactory;
    public $table = 'contact_us_touch';
    protected $fillable = ['touch', 'created_at', 'updated_at'];
}
