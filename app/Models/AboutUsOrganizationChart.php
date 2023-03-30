<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsOrganizationChart extends Model
{
    use HasFactory;
    public $table = 'about_us_organization_chart';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
