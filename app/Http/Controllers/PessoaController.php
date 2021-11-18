<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $pessoa = DB::table('pessoas')->paginate(2);
        
       
        return  view('pessoas',['pessoa' => $pessoa]);

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
       
        $msg = '<h1>NOVO CLIENTE CADASTRADO NO SISTEMA</h1>
        <h4>DADOS DO CLIENTE</h4>
        Nome: '.$request->get('nome').'<br />
        Email: '.$request->get('email').'
        Telefone: '.$request->get('telefone').'
        Mensagem: '.$request->get('Mensagem').'
        ';    
        //dd($msg);
        \Illuminate\Support\Facades\Mail::send(new \App\Mail\SendMailUser(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'),$msg));
        $pessoa = Pessoa::create($request->all());
        return redirect()->route('pessoa.show',['pessoa' => $pessoa->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        $dados = DB::table('pessoas')
        ->where('id', '=', $pessoa->id)
        ->get();
        // dd($dados);

        return view('meu-perfil',['dados' => $dados]);

     
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
