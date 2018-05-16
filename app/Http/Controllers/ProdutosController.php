<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::get();
        return response()->json($produtos);
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
        $produto = new Produtos();
        $produto->fill($request->all());
        $produto->save();

        return response()->json($produto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produto)
    {
        $item = Produtos::find($produto);

        if(!$item) {
            return response()->json([
                'message' => 'Não encontrado',
            ], 404);
        }

        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        try{
            //dd('oe', $item);

            $item = Produtos::find($produtos);
            $item->fill($request->all());
            $item->save();

            return response()->json($item);

        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            response()->json($e);
        }

        // if(!$item) {
        //     return response()->json([
        //         'message' => 'Não encontrado',
        //     ], 404);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}
