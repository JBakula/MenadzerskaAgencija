<?php

namespace App\Http\Controllers;

use App\Models\Agencija;
use Illuminate\Http\Request;

class AgencijaController extends Controller
{
    public function show(){
        $agencije = Agencija::orderBy('Naziv_agencije')
                    ->paginate(4);
        $data = [
            'agencije' => $agencije
        ];
        return view('agencija.index',$data);
    }

    public function create(){
        return view('agencija.create');
    }

    public function store(Request $request){
        $userInput = $request->validate([
            'Naziv_agencije' => 'required|max:100',
            'Vlasnik' => 'nullable|max:150',
            'Email' => 'nullable|email',
            'Kontakt'=>'nullable|max:100'
        ]);

        Agencija::create($userInput);
        return redirect()->route('pocetna')->with('poruka','Agencija je uspješno dodana');
    
    }

    public function delete($id){
        $agencija = Agencija::find($id);
        $agencija->delete();
        return redirect()->route('pocetna')->with('poruka','Agencija je uspješno izbrisana'); 
    }

    public function edit($id){
        $agencija = Agencija::find($id);
        return view('agencija.edit',['agencija'=>$agencija]);
    }

    public function update(Request $request,$id){
        $agencija = Agencija::find($id);
        $userInput = $request->validate([
            'Naziv_agencije' => 'required|max:100',
            'Vlasnik' => 'nullable|max:150',
            'Email' => 'nullable|email',
            'Kontakt'=>'nullable|max:100'
        ]);

        $agencija->update($userInput);
        return redirect()->route('pocetna')->with('poruka','Agencija je uspješno ažurirana');
    }
}
