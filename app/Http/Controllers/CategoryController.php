<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //echo "aquí se va a mostrar  todos los bootcamp";
       return response()->json( new CategoryCollection(Category::all())
                                , 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StroreCategoryRequest $request)
    {

       //verificar que llegó aquí el payload
       //return $request->all();
       //registrar el bootcamp a partir del payload

       $b = Category::create(
        $request->all()
        );
        return response( ["success" => true,
                        "data"=> $b ] , 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json( ["success" => true,
                            "data"=>Category::find($id)
        ] , 200);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1. Seleccionar el bootcamp por id
        $category = Category::find($id);
        //2. Actualizarlo
        $category->update(
            $request->all()
        );
        //3. Hacer el Response
        return response()->json( ["success" => true ,
                                "data" => new CategoryResource ($category)
                                ] , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //1. Seleccionar el bootcamp
       $category = Category::find($id);
       //2. Eliminar ese bootcamp
       $category->delete();
       //3. Response:
       return response()->json( ["success" => true,
                                "message" => "Category",
                                "data"=>new CategoryResource ($category)  ] , 200);
       
    }
}
