<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     public static $rules = array(
        'model' => 'required',
        'title' => 'required',
        'body' => 'required',
    );
    
    protected $fillable = ['model','title','body','profile_id'];
    
    public function profile()
    {
      return $this->belongsTo('App\Profile')->withDefault();
    }


// いいね機能のための追加
    public function likes()
    {
      return $this->hasMany('App\Like');
    }

    public function like_by()
    {
      return Like::where('user_id', \Auth::user()->id)->get();
    }
}
