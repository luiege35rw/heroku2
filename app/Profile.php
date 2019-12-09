<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'modelhistory' => 'required',
        'spot' => 'required',
        'introduction' => 'required',
    );
    protected $fillable = [
        'name',
        'modelhistory',
        'spot',
        'introduction',
        'image_path',
        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',
        'image_path6',
    ];
}
