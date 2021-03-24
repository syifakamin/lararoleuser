<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Facades\Schema;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
}