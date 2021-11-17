<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct(){
        $this->middleware();
    }*/

    public function index()
    {
        $carros = Carro::where('id','>',0)->paginate(3);
        return  view('all-carros',['carros' => $carros]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function create()
    {
        return view('carro');
    }*/

    public function cadastrar()
    {
        return view('carro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carro = Carro::create($request->all());
        return redirect()->route('carro.show',['carro' => $carro->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Carro $carro)
    {
        //dd($carro->getAttributes());
        return view('carros',['carro'=>$carro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        return view('edit-carro', ['carro' => $carro]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        $carro->update($request->all());
        return redirect()->route('carro.show',['carro' => $carro->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('list',['carro' => $carro]);
        //return view('all-carros', ['carro' => $carro]);
    }
}
