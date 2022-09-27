<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
        
    //fillable: permite realizar 
    //insertar varias instaias al tiempo
    protected $fillable=['name', 
                        'last_update'
                    ]; 
}
