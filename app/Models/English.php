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
    public $timestamps=true;
    protected $table='english';
    protected $fillable = ['user_id','word','meaning1','meaning2','memo','created_by'];
}
