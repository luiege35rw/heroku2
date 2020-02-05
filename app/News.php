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
}
//プルダウンメニュー用の配列
  $profile = [
        ''      => '選択してください' ,
        'name' => 'name' ,
        'modelhistory'   => 'modelhistory' ,
        'spot,' => 'spot,' ,
        'introduction,' => 'introduction,' ,
    ];