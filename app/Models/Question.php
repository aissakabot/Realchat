<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable=['title','slug','body','user_id','category_id'];
    protected $guarded=[];
   
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function replies()
        {
            return $this->hasMany(Reply::class );
        }
        public function category()
        {
            return $this->belongsTo(Category::class);
        }

        public function getRouteKeyName(){
            return 'slug';
        }
        public function getPathAttribute(){
            return asset("api/questions/".$this->slug);
        }
    
}
