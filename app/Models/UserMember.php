<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMember extends Model
{
    use HasFactory;

    protected $table = 'usergym';

    public $timestamps = false;

}
