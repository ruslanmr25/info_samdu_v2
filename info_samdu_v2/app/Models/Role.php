<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable=[
        'role'
    ];

    public function students()
    {
        return $this->belongsToMany(User::class,'users_roles','roles_id','users_id');
    }
}
