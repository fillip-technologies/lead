<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digitalmarketing extends Model
{
    use HasFactory;

    protected $table = 'digitalmarketing';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',     
    ];

      
   
}
