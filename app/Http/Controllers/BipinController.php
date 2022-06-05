<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bipin;

class BipinController extends Controller
{
    public function index(){
        $govindas = Bipin::latest()->get();
        return view ('govinda.index' , compact('govindas'));
    }

    // Add lead
    public function add(){
        $govindas = Bipin::orderBy('name', 'ASC')->get();
        return view ('govinda.add', compact('govindas'));
    }

    // Store lead
    public function store(Request $request){
        $data = $request->all();
       $govinda = new Bipin();
       $govinda->name = $data['name'];
       $govinda->email = $data['email'];
       $govinda->save();
        return redirect()->back();
    }

    // Edit lead
public function edit($id){
    $govinda = Bipin::findOrFail($id);
    return view ('govinda.edit', compact('govinda'));
}
public function update(Request $request, $id){
    $data = $request->all();
    $govinda = Bipin::findOrFail($id);
    $govinda->name = $data['name'];
    $govinda->email = $data['email'];
    $govinda->save();
    return redirect()->back();
}

// Delete
public function destroy($id){
    $govinda = Bipin::findOrFail($id);
    $govinda->delete();
    return redirect()->back();


}
}