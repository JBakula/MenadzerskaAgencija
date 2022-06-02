<?php

namespace App\Http\Controllers;

use App\Models\Drzava;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrzavaController extends Controller
{
    //
    public function index(){
        $drzave = DB::table('Drzava')
            ->orderBy('Naziv_drzave')
            ->paginate(4);
        $data=[
            'drzava'=>$drzave
        ];
        return view('drzava.index',$data);
    }
    public function create(){
        return view('drzava.create');
    }
    public function store(Request $request){
        $userInput = $request->validate([
            'Naziv_drzave'=>'required'
        ]);
        Drzava::create($userInput);
        return redirect()->route('drzave')->with('poruka','Država je uspješno dodana!');
    }
    public function delete($id){
        $drzava = Drzava::find($id);
        $drzava->delete();
        return redirect()->route('drzave')->with('poruka','Država je uspješno izbrisana!'); 
    }
    public function edit($id){
        $drzava = Drzava::find($id);
        return view('drzava.edit',['drzava'=>$drzava]);
    }
    public function update(Request $request,$id){
        $drzava = Drzava::find($id);
        $userInput = $request->validate([
            'Naziv_drzave'=>'required'
        ]);
        $drzava->update($userInput);
        return redirect()->route('drzave')->with('poruka','Država je uspješno ažurirana!');
    }
}
