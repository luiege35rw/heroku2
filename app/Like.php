<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Like extends Model
{
      use CounterCache;

    public $counterCacheOptions = [
        'News' => [
            'field' => 'likes_count',
            'foreignKey' => 'news_id'
        ]
    ];

    protected $fillable = ['user_id', 'news_id'];

    public function Post()
    {
      return $this->belongsTo('App\News');
}
}
