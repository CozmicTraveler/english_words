<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Definition of English words.
class English extends Model
{
    use HasFactory;
    /** 
    *
    *@var bool
    *
    **/
    //Using timestamps explicitly(timestamps are activated by default).
    public $timestamps=true;
    
    //Designate table's name.
    protected $table='english';

    //To activate created_at and updataed_at, add the columns to $fillable or $guarded.
    protected $fillable = ['user_id','word','meaning1','meaning2','memo','created_by'];
}
