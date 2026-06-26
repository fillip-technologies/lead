<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websitedesign extends Model
{
    use HasFactory;

    protected $table = 'websitedesign';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',   
        'source',
    ];

      
   
}
