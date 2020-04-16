<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role','name'];

    public function users() {

		//return $this->belongsToMany('App\User', 'roles_users');
		return $this->belongsToMany('App\User', 'role_user', 'user_id', 'role_id');

	}
}

