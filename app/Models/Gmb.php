<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gmb extends Model
{
    use HasFactory;

    protected $table = 'gmb';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',     
    ];

      
   
}
