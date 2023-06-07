<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokk extends Model
{
    
    protected $table='post';
    public $timestamps=false;
    protected $casts=[
        'fav'=> 'array',
        'coment'=>'array',
        'comentuid'=>'array'

    ];
}
