<?php

namespace App\Models;

use App\User;
use App\Models\Reply;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable=['title','slug','body','user_id','category_id'];
    protected $guarded=[];
   
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($question) {
            $question->slug = str_slug($question->title);
        });
    }
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
            return "questions/".$this->slug;
        }
    
}
