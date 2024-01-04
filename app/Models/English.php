<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class English extends Model
{
    use HasFactory;
    /** 
    *
    *@var bool
    *
    **/
    public $timestamp=true;
    protected $table='english';
}
