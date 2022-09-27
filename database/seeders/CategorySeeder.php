<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use File;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //1. Leer el archivo de datos 
       $json=File::get('database/_data/category.json');
       //2. convertir los datos en un arreglo
       $arreglo_category = json_decode($json);
       //3. recorrer el areglo
       //var_dump($arreglo_usuarios);
       foreach($arreglo_category as $category)
           //4. registrar el usuario en base de datos
           // se utiliza el metodo ::create
           Category::create([
           "name" => $category->name,
           "last_update" => $category->last_update
     
           ]);
    }
}
