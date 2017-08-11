<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    protected $fillable = ['title','id','post','tags','user_id'];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
