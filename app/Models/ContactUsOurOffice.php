<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsOurOffice extends Model
{
    use HasFactory;
    public $table = 'contact_us_our_office';
    protected $fillable = ['address_en', 'address_ar', 'phone', 'email', 'created_at', 'updated_at'];
}
