<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
        //驗證
    protected $fillable = [
        'logo_image','small_logo_image','title_top','description','keywords',
        'wordtime','tel','map','phome','fox','email',
    ];



}
