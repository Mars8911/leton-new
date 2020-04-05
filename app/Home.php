<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //


    //驗證
    protected $fillable = [
      'index_title_1','index_image_1','index_description_1', 'index_title_2', 'index_image_2','index_description_2',
      'index_title_3','index_image_3','index_description_3','index_title_4','index_image_4','index_description_4',
      'index_title_5','index_image_5','index_description_5'
    ];



 public function user(){

        return $this->belongsTo('App\user');

    }
}
