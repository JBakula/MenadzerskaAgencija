<?php

namespace App\Http\Controllers;

use App\Models\Agencija;
use Illuminate\Http\Request;
use App\Models\Ugovor_nogometas_agencija;

class UgovorAgencijaController extends Controller
{
    public function index($id){
        $query = Ugovor_nogometas_agencija::paginate(4);
        $data = [
            'Nogometasi' => $query,
            'id' => $id
        ];
        return view('ugovorAgencija.index',$data);
    }
}
