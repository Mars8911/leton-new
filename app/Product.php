<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    


    //
     protected $fillable = [
        'title_top','description','keywords','title','content','image','image_description','category_id'
    ];

    // 單獨 
    public function user(){

        return $this->belongsTo('App\user');
    }

     //單獨 
    public function category(){

        return $this->belongsTo('App\Category');
    }


         //多對多
    public function tags(){

        return $this->belongsToMany('App\Tag');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return boot
     */

     
            //多對多
    public function hasTag($tagId){

        return in_array($tagId , $this->tags->pluck('id')->toArray());
    }





}
