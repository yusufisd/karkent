<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class UserModel extends Authenticatable
{
    use HasFactory, HasRoles;

    protected $guarded = [];

    public function Yetkiler(){
        return $this->hasOne(Roller::class,'id','role_id');
    }


}
