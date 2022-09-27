<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    
    //fillable: permite realizar 
    //insertar varias instaias al tiempo
    protected $fillable=['first_name', 
                        'last_name', 
                        'last_update' 
                    ]; 
}
