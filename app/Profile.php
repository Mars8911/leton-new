<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //驗證
    protected $fillable = [
        'user_id','about','avatar',
    ];




 public function user(){

        return $this->belongsTo('App\user');

    }
    
    
}
