<?php

namespace App\Http\Controllers;
use App\Models\LandingModel;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
    $newModels = LandingModel::all();
    return view('new.index', compact('LandingModels'));
    }

    public function create()
    {
    return view('new.create');
    }

    public function store(Request $request)
    {
    $newModel = new LandingModel;
    $newModel->name = $request->name;
    $newModel->description = $request->description;
    $newModel->save();

    return redirect()->route('new.index');
    }

    public function edit($id)
    {
    $newModel = LandingModel::find($id);
    return view('new.edit', compact('newModel'));
    }

    public function update(Request $request, $id)
    {
    $newModel = LandingModel::find($id);
    $newModel->name = $request->name;
    $newModel->description = $request->description;
    $newModel->save();

    return redirect()->route('new.index');
    }

    public function destroy($id)
    {
    $newModel = LandingModel::find($id);
    $newModel->delete();

    return redirect()->route('new.index');
    }
    
}
