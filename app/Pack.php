<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
        
       ];
}
