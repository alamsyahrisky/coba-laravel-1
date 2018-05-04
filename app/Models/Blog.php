<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    // protected $table = "nametable"; 
    public $timestamps = false; //created at disable

    protected $fillable = ['title','description']; //boleh diisi
    protected  $guarded =['created_at','modified_at']; // gaboleh diisi
}
