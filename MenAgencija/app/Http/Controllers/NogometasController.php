<?php

namespace App\Http\Controllers;

use App\Models\Nogometas;
use Illuminate\Http\Request;
use App\Models\PozicijaNogometas;
use Illuminate\Support\Facades\DB;

class NogometasController extends Controller
{
    //
    public function index(){
        $nogometasi = DB::table('Nogometas')
        ->orderBy('Prezime')
        ->paginate(4);
        $data = [
            'nogometas' => $nogometasi
        ];
        return view('nogometas.index',$data);
    }
    public function create(){
        $drzave = DB::table('Drzava')
        ->orderBy('Naziv_drzave')
        ->get();
        $noga = DB::table('Noga')
        ->get();
        $pozicije = DB::table('Pozicija')
        ->get();
        $data=[
            'drzave' => $drzave,
            'noga'=> $noga,
            'pozicije' => $pozicije
        ];
        //dd($drzave);
        return view('nogometas.create',$data);
    }
    public function store(Request $request){
        $userInput = $request->validate([
            'Ime' => 'nullable|max:100',
            'Prezime' => 'nullable|max:100',
            'Visina' => 'nullable|numeric|between:0,2.50',
            'Vrijednost' => 'nullable|numeric|between:0,999.999',
            'Datum_rodjenja'=>'nullable|date',
            'nacionalnost_fk'=>'required|integer',
            'noga_fk'=>'required|integer',
            'pozicija_fk' => 'required|min:1'
            
        ]);
        $nogometas = new Nogometas;
        $nogometas->Ime = $userInput['Ime'];
        $nogometas->Prezime = $userInput['Prezime'];
        $nogometas->Visina = $userInput['Visina'];
        $nogometas->Vrijednost = $userInput['Vrijednost'];
        $nogometas->Datum_rodjenja = $userInput['Datum_rodjenja'];
        $nogometas->nacionalnost_fk = $userInput['nacionalnost_fk'];
        $nogometas->noga_fk = $userInput['noga_fk'];
        $nogometas->save();
        //$id = $nogometas->nogometas_id;
       // return $nogometas->nogometas_id;
        foreach($userInput['pozicija_fk'] as $item){
            $pozicija_nogometas = new PozicijaNogometas;
            $pozicija_nogometas->pozicija_fk = $item;
            $pozicija_nogometas->nogometas_fk = $nogometas->nogometas_id;
            $pozicija_nogometas->save();
        }
        //dd($userInput);
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno dodan');
    }
    public function delete($id){
        $nogometas = Nogometas::find($id);
        $nogometas->delete();
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno izbrisan'); 
    }
    public function edit($id){
        $nogometas = DB::table('Nogometas')
        ->join('Drzava','Nogometas.nacionalnost_fk','Drzava.drzava_id')
        ->join('Noga','Nogometas.noga_fk','Noga.noga_id')
        ->where('nogometas_id','=',$id)
        ->first();
        $drzave = DB::table('Drzava')
        ->orderBy('Naziv_drzave')
        ->get();
        $noga = DB::table('Noga')
        ->get();
        $pozicije = DB::table('Pozicija')
        ->get();
        
        $pozicijaNogometas = DB::table('Pozicija_nogometas')
            ->where('nogometas_fk','=',$id)
            ->get();
        /*$ostalePozicije = DB::table('Pozicija') 
            ->whereNotIn('pozicija_id',function ($query) {
                $query->select('pozicija_fk')
                      ->from('Pozicija_nogometas')
                      ->where('nogometas_fk','=',);  
            })
            ->get();*/
        $data=array(
            'drzave' => $drzave,
            'noga'=> $noga,
            'pozicije' => $pozicije,
            'nogometas'=>$nogometas,
            'pozicijaNogometas'=>$pozicijaNogometas
        );
            
        
        return view('nogometas.edit',$data);
        //dd($ostalePozicije);
    }

    public function show($id){
        $nogometas = DB::table('Nogometas')
            ->join('Drzava','Nogometas.nacionalnost_fk','Drzava.drzava_id')
            ->join('Noga','Noga.noga_id','Nogometas.noga_fk')
            ->where('nogometas_id',$id)
            ->first();
        $pozicije = DB::table('Pozicija_nogometas')
            ->join('Pozicija','Pozicija.pozicija_id','Pozicija_nogometas.pozicija_fk')
            ->where('nogometas_fk',$id)
            ->get();
        $data = [
            'nogometas'=>$nogometas,
            'pozicija' => $pozicije
        ];
        return view('nogometas.show',$data);
    }
    public function update(Request $request, $id){
        $nogometas = Nogometas::find($id);
        $userInput = $request->validate([
            'Ime' => 'nullable|max:100',
            'Prezime' => 'nullable|max:100',
            'Visina' => 'nullable|numeric|between:0,2.50',
            'Vrijednost' => 'nullable|numeric|between:0,999.999',
            'Datum_rodjenja'=>'nullable|date',
            'nacionalnost_fk'=>'required|integer',
            'noga_fk'=>'required|integer',
            'pozicija_fk' => 'required|min:1'
            
        ]);
        $nogometas->Ime = $userInput['Ime'];
        $nogometas->Prezime = $userInput['Prezime'];
        $nogometas->Visina = $userInput['Visina'];
        $nogometas->Vrijednost = $userInput['Vrijednost'];
        $nogometas->Datum_rodjenja = $userInput['Datum_rodjenja'];
        $nogometas->nacionalnost_fk = $userInput['nacionalnost_fk'];
        $nogometas->noga_fk = $userInput['noga_fk'];
        $nogometas->save();

        $postojecePozicije = DB::table('Pozicija_nogometas')
            ->where('nogometas_fk',$id)
            ->get();
        foreach($postojecePozicije as $item){
            $pozicija = DB::table('Pozicija_nogometas')
            ->where('nogometas_fk',$id)
            ->where('pozicija_fk',$item->pozicija_fk)
            ->delete();
        }
        foreach($userInput['pozicija_fk'] as $item){
            $pozicija_nogometas = new PozicijaNogometas;
            $pozicija_nogometas->pozicija_fk = $item;
            $pozicija_nogometas->nogometas_fk = $nogometas->nogometas_id;
            $pozicija_nogometas->save();
        }
        return redirect()->route('nogometasPocetna')->with('poruka','Nogometaš je uspješno ažuriran');
    }
}
