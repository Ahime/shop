<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptUser extends Model
{
    protected $fillable = ['username','sex','birthday','phone','bankingAccount','email','password','urlImage','Role_id'];
}
 