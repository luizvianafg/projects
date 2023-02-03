<?php

namespace App\Http\Controllers;

use App\Models\PlaneModel;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plane = PlaneModel::orderBy('created_at', 'desc')->paginate(10);
        return view('planes.planeindex', compact('plane'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.planeadd');
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
       'marca' => 'required',
       'modelo' => 'required',
       'ano_fabricacao' => 'required',
       'proprietario' => 'required',       
       ]);

       PlaneModel::create([
       'marca' => $request->marca,
       'modelo' => $request->modelo,
       'ano_fabricacao' => $request->ano_fabricacao,
       'proprietario' => $request->proprietario,       
       ]);

       return redirect('/planeindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = PlaneModel::find($id);
        return view('planes.planedetail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PlaneModel::find($id);
        return view('planes.planeedit', compact('edit'));
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
        'marca' => 'required',
        'modelo' => 'required',
        'ano_fabricacao' => 'required',
        'proprietario' => 'required',
        ]);

       PlaneModel::where('id', $id)->update([
        'marca' => $request->marca,
        'modelo' => $request->modelo,
        'ano_fabricacao' => $request->ano_fabricacao,
        'proprietario' => $request->proprietario,
        ]);

        return redirect('/planeindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlaneModel::destroy($id);
        return redirect('/planeindex');
    }
}
