<?php

namespace App\Http\Controllers;

use App\Models\Agencija;
use Illuminate\Http\Request;
use App\Models\UgovorAgencija;
use Illuminate\Support\Facades\DB;

class UgovorAgencijaController extends Controller
{
    //
    public function index($id){
        $query = DB::table('Ugovor_nogometas_agencija')
            ->join('Nogometas','Ugovor_nogometas_agencija.nogometas_fk','Nogometas.nogometas_id')
            ->where('agencija_fk','=',$id)
            ->orderBy('Prezime')
            ->paginate(4);
        $agencija = Agencija::find($id);
        $data = [
            'Nogometasi' => $query,
            'agencija' => $agencija
        ];
        return view('ugovorAgencija.index',$data);
    }

    public function create($id){
        $nogometasi = DB::table('Nogometas')
            ->whereNotIn('nogometas_id',function ($query) {
                $query->select('nogometas_fk')
                      ->from('Ugovor_nogometas_agencija');   
            })
            ->get();
        $data = array(
            'nogometasi'=> $nogometasi,
            'agencija_id'=>$id
            
        );
        $agencija = Agencija::find($id);
        //dd($nogometasi);
        return view('ugovorAgencija.create',$data);
    }
    public function store(Request $request,$id){
        $userInput = $request->validate([
            'nogometas_fk' => 'required|integer',
            'agencija_fk' => 'required|integer',
            'Postotak_od_transfera' => 'required|numeric|between:0,99.99',
            'Postotak_od_godisnje_place'=>'required|numeric|between:0,99.99'
        ]);
        UgovorAgencija::create($userInput);
        return redirect()->route('prikazKlijenata',$id)->with('poruka','Novi klijent je uspješno dodan');
    }
    public function delete($id){
        $ugovor = DB::table('Ugovor_nogometas_agencija')
            ->where('ugovor_nogometas_agencija_id',$id)
            ->first();
        $id_agencije = $ugovor->agencija_fk;
        $ugovor = UgovorAgencija::find($id);
        $ugovor->delete();
        return redirect()->route('prikazKlijenata',$id_agencije)->with('poruka','Ugovor s klijentom je uspješno izbrisan');
    }
    public function edit($id){
        $ugovor = DB::table('Ugovor_nogometas_agencija')
            ->join('Nogometas','Ugovor_nogometas_agencija.nogometas_fk','Nogometas.nogometas_id')
            ->where('ugovor_nogometas_agencija_id','=',$id)
            ->first();
        $nogometasi = DB::table('Nogometas')
            ->whereNotIn('nogometas_id',function ($query) {
                $query->select('nogometas_fk')
                      ->from('Ugovor_nogometas_agencija');   
            })
            ->get();
        $agencija = $ugovor->agencija_fk;
        $data = array(
            'nogometasi'=> $nogometasi,
            'agencija_id'=>$agencija,
            'ugovor'=>$ugovor
            
        );
        return view('ugovorAgencija.edit',$data);
    }
    public function update(Request $request,$id){
        $ugovor = UgovorAgencija::find($id);
        $agencija_id = $ugovor->agencija_fk;
        $userInput = $request->validate([
            'nogometas_fk' => 'required|integer',
            'agencija_fk' => 'required|integer',
            'Postotak_od_transfera' => 'required|numeric|between:0,99.99',
            'Postotak_od_godisnje_place'=>'required|numeric|between:0,99.99'
        ]);

        $ugovor->update($userInput);
        return back()->with('poruka','Ugovor je uspješno ažuriran');
        
    }
}
