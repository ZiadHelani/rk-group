<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeOurPartner extends Model
{
    use HasFactory;
    public $table = 'home_our_partner';
    protected $fillable = ['organization_name', 'organization_nickname', 'image', 'created_at', 'updated_at'];
}
