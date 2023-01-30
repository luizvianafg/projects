<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientModel;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = ClientModel::orderBy('created_at', 'desc')->get();
        return view('clients.clientindex', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.clientadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
       'nome_principal' => 'required',
       'ranking' => 'required',
       'possivel_renda' => 'required',
       'telefone_1' => 'required',
       'email_1' => 'required|email',
       ]);

       $client = ClientModel::create([
       'nome_principal' => $request->nome_principal,
       'ranking' => $request->ranking,
       'possivel_renda' => $request->possivel_renda,
       'telefone_1' => $request->telefone_1,
       'email_1' => $request->email_1,
       ]);

       return redirect('/clientindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = ClientModel::find($id);
        return view('clients.clientdetail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ClientModel::find($id);
        return view('clients.clientedit', compact('edit'));
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
        $request->validate([
        'nome_principal' => 'required',
        'ranking' => 'required',
        'possivel_renda' => 'required',
        'telefone_1' => 'required',
        'email_1' => 'required|email',
        ]);
        
        ClientModel::where('id', $id)->update([
        'nome_principal' => $request->nome_principal,
        'ranking' => $request->ranking,
        'possivel_renda' => $request->possivel_renda,
        'telefone_1' => $request->telefone_1,
        'email_1' => $request->email_1,
        ]);

        return redirect('/clientindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientModel::destroy($id);
        return redirect('/clientindex');
    }
}
