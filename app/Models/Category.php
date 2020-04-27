<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //protected $fillable=['name','slug'];
    protected $guarded=[];
    public function getRouteKeyName(){
        return 'slug';
    }
}
