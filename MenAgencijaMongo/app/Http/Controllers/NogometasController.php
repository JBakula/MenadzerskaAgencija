<?php

namespace App\Http\Controllers;

use App\Models\Drzava;
use App\Models\Nogometas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NogometasController extends Controller
{
    public function index(){
        $nogometasi = Nogometas::orderBy('Prezime')
        ->paginate(4);
        $data = [
            'nogometas' => $nogometasi
        ];
        return view('nogometas.index',$data);
    }
    public function create(){
        $drzave = Drzava::orderBy('Naziv')
        ->get();
        $nogometasi = Nogometas::orderBy('Prezime')
        ->get();
        $pozicije = ["defanzivni vezni", "centralni vezni", "lijevo krilo", "centarfor", "stoper", "lijevi bek", "golman"];
        $data=[
            'drzave' => $drzave,
            'nogometasi' => $nogometasi,
            'pozicije' => $pozicije
        ];
        //dd($drzave);
        return view('nogometas.create',$data);
    }

    public function store(Request $request){
        $userInput = $request->validate([
            'Ime' => 'required|max:100',
            'Prezime' => 'required|max:100',
            'Visina' => 'nullable|numeric|between:0,2.50',
            'Vrijednost' => 'nullable|numeric|between:0,999.999',
            'Datum_rodjenja'=>'nullable|date',
            'Nacionalnost'=>'required',
            'Noga'=>'required',
            'Pozicija' => 'required|min:1'
        ]);
        Nogometas::create($userInput);
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno dodan');
    }

    public function show($id){
        $nogometas = Nogometas::find($id);
        $pozicije = $nogometas->Pozicija;
        $data = [
            'nogometas'=>$nogometas,
            'pozicija' => $pozicije
        ];
        return view('nogometas.show',$data);
    }

    public function edit($id){
        $nogometas = Nogometas::find($id);
        $drzave = Drzava::orderBy('Naziv')
        ->get();
        $pozicije = ["defanzivni vezni", "centralni vezni", "lijevo krilo", "centarfor", "stoper", "lijevi bek", "golman"];
        $data=array(
            'drzave' => $drzave,
            'pozicije' => $pozicije,
            'nogometas'=>$nogometas
        );
            
        
        return view('nogometas.edit',$data);
    }

    public function update(Request $request, $id){
        $nogometas = Nogometas::find($id);
        $userInput = $request->validate([
            'Ime' => 'required|max:100',
            'Prezime' => 'required|max:100',
            'Visina' => 'nullable|numeric|between:0,2.50',
            'Vrijednost' => 'nullable|numeric|between:0,999.999',
            'Datum_rodjenja'=>'nullable|date',
            'Nacionalnost'=>'required',
            'Noga'=>'nullable',
            'Pozicija' => 'required|min:1'
        ]);

        $nogometas = Nogometas::where('_id','=',$id)->first();
        $nogometas->update($userInput);
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno ažuriran');
    }

    public function delete($id){
        $nogometas = Nogometas::find($id);
        $nogometas->delete();
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno izbrisan'); 
    }
}
