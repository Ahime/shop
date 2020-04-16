<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shopName','country','town','domain','adress'];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
