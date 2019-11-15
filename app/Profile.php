<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'modelhistory' => 'required',
        'spot' => 'required',
        'introduction' => 'required',
    );
    protected $fillable = ['name','modelhistory','spot','introduction'];
}
