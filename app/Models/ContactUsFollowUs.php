<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsFollowUs extends Model
{
    use HasFactory;
    public $table = 'contact_us_follow_us';
    protected $fillable = ['facebook_link', 'twitter_link', 'instagram_link', 'created_at', 'updated_at'];
}
