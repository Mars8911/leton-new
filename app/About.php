<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

    //驗證
    protected $fillable = [
        'title','content','image','service'
    ];



 public function user(){

        return $this->belongsTo('App\user');

    }


    
}
