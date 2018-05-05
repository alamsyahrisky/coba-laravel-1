<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    
    // protected $table = "nametable"; 
    public $timestamps = false; //created at disable

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['title','description']; //boleh diisi
    protected  $guarded =['created_at','modified_at']; // gaboleh diisi
}
