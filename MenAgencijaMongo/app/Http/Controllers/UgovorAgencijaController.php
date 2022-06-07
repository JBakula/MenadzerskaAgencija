<?php

namespace App\Http\Controllers;

use App\Models\Agencija;
use App\Models\Nogometas;
use Illuminate\Http\Request;
use App\Models\Ugovor_nogometas_agencija;

class UgovorAgencijaController extends Controller
{
    public function index($id){
        $query = Ugovor_nogometas_agencija::get();
        $data = [
            'Nogometasi' => $query,
            'id' => $id
        ];
        return view('ugovorAgencija.index',$data);
    }

    public function create($id){
        $nogometasi = Nogometas::get();
        $ugovorAgencija = Ugovor_nogometas_agencija::get();

        $niz = [];
        $ugA_id = "";
        foreach($nogometasi as $nogometas){
            $istina = 1;
            $nog_id = $nogometas->_id;
            foreach($ugovorAgencija as $ugA){
                $pom = $ugA->nogometas_id;
                foreach($pom as $ua){
                    $ugA_id = $ua;
                }

                if($nog_id === $ugA_id){
                    $istina = 0;
                }
            }
            if($istina){
                array_push($niz, $nogometas);
            }
        }
        $data = array(
            'nogometasi'=> $niz,
            'agencija_id'=>$id
        );
        //dd($nogometasi);
        return view('ugovorAgencija.create',$data);
    }

    public function store(Request $request,$id){
        $userInput = $request->validate([
            'nogometas_id' => 'required',
            'agencija_id' => 'required',
            'Postotak_od_transfera' => 'required|numeric|between:0,99.99',
            'Postotak_place'=>'required|numeric|between:0,99.99'
        ]);
        // $nogometas = Nogometas::find($userInput['nogometas_id']);
        // $agencija = Agencija::find($userInput['agencija_id']);

        // $userInput['nogometas_id'] = $nogometas;
        // $userInput['agencija_id'] = $agencija;
        
        Ugovor_nogometas_agencija::create($userInput);
        return redirect()->route('prikazKlijenata',$id)->with('poruka','Novi klijent je uspješno dodan');
    }

    public function delete($id){
        $ugovor = Ugovor_nogometas_agencija::where('_id', $id)
            ->first();
        $id_agencije = $ugovor->agencija_id;
        $ugovor = Ugovor_nogometas_agencija::find($id);
        $ugovor->delete();
        return redirect()->route('prikazKlijenata',$id_agencije)->with('poruka','Ugovor s klijentom je uspješno izbrisan');
    }

    // public function edit($id){
    //     $ugovor = Ugovor_nogometas_agencija::
    //         ->join('Nogometas','Ugovor_nogometas_agencija.nogometas_fk','Nogometas.nogometas_id')
    //         ->where('ugovor_nogometas_agencija_id','=',$id)
    //         ->first();
    //     $nogometasi = DB::table('Nogometas')
    //         ->whereNotIn('nogometas_id',function ($query) {
    //             $query->select('nogometas_fk')
    //                   ->from('Ugovor_nogometas_agencija');   
    //         })
    //         ->get();
    //     $agencija = $ugovor->agencija_fk;
    //     $data = array(
    //         'nogometasi'=> $nogometasi,
    //         'agencija_id'=>$agencija,
    //         'ugovor'=>$ugovor
            
    //     );
    //     return view('ugovorAgencija.edit',$data);
    // }

    // public function update(Request $request,$id){
    //     $ugovor = UgovorAgencija::find($id);
    //     $agencija_id = $ugovor->agencija_fk;
    //     $userInput = $request->validate([
    //         'nogometas_fk' => 'required|integer',
    //         'agencija_fk' => 'required|integer',
    //         'Postotak_od_transfera' => 'required|numeric|between:0,99.99',
    //         'Postotak_od_godisnje_place'=>'required|numeric|between:0,99.99'
    //     ]);

    //     $ugovor->update($userInput);
    //     return back()->with('poruka','Ugovor je uspješno ažuriran');
        
    // }
}
