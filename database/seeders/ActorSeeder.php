<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;
use File;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //1. Leer el archivo de datos 
       $json=File::get('database/_data/actor.json');
       //2. convertir los datos en un arreglo
       $arreglo_actor = json_decode($json);
       //3. recorrer el areglo
       //var_dump($arreglo_usuarios);
       foreach($arreglo_actor as $actor)
           //4. registrar el usuario en base de datos
           // se utiliza el metodo ::create
           Actor::create([
           "first_name" => $actor->first_name,
           "last_name" => $actor->last_name,
           "last_update" => $actor->last_update
     
           ]);
    }
}
