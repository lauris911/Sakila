<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //La tabla a conectar a este modelo
     protected $table="category";

    //La clave primaria de esa tabla 
    protected $primaryKey = "category_id";
    //omitir campos de auditoria 
     public $timestamps =false; 
    
   use HasFactory;
     
    //fillable: permite realizar 
     //insertar varias instaias al tiempo
    protected $fillable=['name'
     ];
    
}
