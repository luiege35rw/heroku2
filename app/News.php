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
    
    protected $fillable = ['model','title','body'];
}
