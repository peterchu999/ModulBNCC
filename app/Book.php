<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_name','book_color','book_year','id'];

    public function User(){
        return $this->belongsToMany('App\User');
    }
}







