<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $table = 'usersaccount';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'password',
        
    ];

      
   
}
