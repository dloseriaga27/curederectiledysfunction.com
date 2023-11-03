<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $primaryKey = 'f_id';
    protected $fillable = ['f_title', 'f_desc', 'f_orders', 'f_status'];
}
