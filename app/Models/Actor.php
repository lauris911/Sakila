<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //La tabla a conectar a este modelo
    protected $table="actor";

    //La clave primaria de esa tabla 
    protected $primaryKey = "actor_id";
    //omitir campos de auditoria 
    public $timestamps =false;
    
    use HasFactory;
    
    //fillable: permite realizar 
    //insertar varias instaias al tiempo
    protected $fillable=['first_name', 
                        'last_name', 
                        'last_update' 
                    ]; 
}
