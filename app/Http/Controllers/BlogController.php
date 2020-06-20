<?php

namespace App\Http\Controllers;


use App\BlogEstudioModel;
use Illuminate\Http\Request;

use App\Http\Requests\BlogEstudioRequest;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('auth')->except('index','show');


    }


    public function index()
    {
       $BlogModelo=BlogEstudioModel::latest()->paginate();

        return view('BlogDC.index',compact('BlogModelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    $BlogModelo=new BlogEstudioModel;

    return view('BlogDC.create',compact('BlogModelo'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogEstudioRequest $request)
    {
        $Nota=(new BlogEstudioModel)->fill( $request->validated() );
        $Nota->save();

        return redirect()->route('NuestraExperiencia.index')->with('SuccessMessage','Nota Publicada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogEstudioModel $BlogLegal) //ID hace referencia a todo el contenido de la tabla del modelo
    {
       return view('BlogDC.show',['BlogModelo'=>$BlogLegal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogEstudioModel $BlogLegal)
    {
/*          $BlogModelo= BlogEstudioModel::findorFail($BlogLegal);
*/
          return view('BlogDC.edit', ['BlogModelo'=>$BlogLegal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogEstudioModel $BlogLegal,Request $request)
    {
        

        $BlogLegal->update( $request->validate([

                'titulo'=>'required',
                'url_blog'=>'required',
                'descripcion'=>'required',
                'contenido'=>'required',


        ]) );

        return redirect()->route('NuestraExperiencia.index')->with('SuccessMessage','Datos Actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogEstudioModel $BlogLegal)
    {
        
        $BlogLegal->delete();
        return redirect()->route('NuestraExperiencia.index')->with('ErrorMessage','Nota Eliminada Correctamente');
    }
}
