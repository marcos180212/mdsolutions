<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $fillable = ['description'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_permissions', 'permission_id', 'user_id');
    }

    public static function orderBy($field, $type)
    {
        return \DB::table('permissions')->orderBy($field, $type)->get();
    }
}
