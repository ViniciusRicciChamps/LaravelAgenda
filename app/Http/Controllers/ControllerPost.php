<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourcePost;
use App\Models\Contatos;
use Illuminate\Http\Request;

class ControllerPost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contatos = Contatos::paginate(10);
        return ResourcePost::collection($contatos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contatos = new Contatos();
        $contatos->nome_contato = $request->input('nome');
        $contatos->telefone_contato = $request->input('telefone');
        if($contatos->save()){
            return new ResourcePost($contatos);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contatos = Contatos::findOrFail($id);
        return new ResourcePost($contatos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $contatos = Contatos::findOrFail($id);
        $contatos->nome_contato = $request->nome_contato;
        $contatos->telefone_contato = $request->telefone_contato;
        
        if($contatos->save()){
            return new ResourcePost($contatos);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $contatos = Contatos::findOrFail($id);
        if($contatos->delete()){
            return new ResourcePost($contatos);
        }
        
    }
}
