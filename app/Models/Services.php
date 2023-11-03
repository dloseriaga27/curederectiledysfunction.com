<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 's_id';
    protected $fillable = ['s_path', 's_title', 's_shortDesc', 's_longDesc', 's_pricing', 's_status'];
}
