@extends('layout')
@section('content')

<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-7">
                Dodaj nogometaša
            </h2>
        </header>

        <form method="POST" action="{{route('updateNogometas',$nogometas->nogometas_id)}}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="Ime" class="inline-block text-lg mb-2"
                    >Ime</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Ime"
                    value="{{$nogometas->Ime}}"
                />
                @error('Ime')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Prezime" class="inline-block text-lg mb-2"
                    >Prezime</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Prezime"
                    value="{{$nogometas->Prezime}}"
                />
                @error('Prezime')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Visina" class="inline-block text-lg mb-2"
                    >Visina</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Visina"
                    placeholder="Npr. 1.87"
                    value="{{$nogometas->Visina}}"
                />
                @error('Visina')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Vrijednost" class="inline-block text-lg mb-2"
                    >Vrijednost (u milijunima)</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Vrijednost"
                   
                    value="{{$nogometas->Vrijednost}}"
                />
                @error('Vrijednost')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Datum_rodjenja" class="inline-block text-lg mb-2"
                    >Datum rođenja</label
                >
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Datum_rodjenja"
                    value="{{$nogometas->Datum_rodjenja}}"
                />
                @error('Datum_rodjenja')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="nacionalnost_fk"
                    class="inline-block text-lg mb-2"
                    >Nacionalnost</label
                >
                <select name="nacionalnost_fk" id="nacionalnost_fk" class="border border-gray-200 rounded p-2 w-full">
                    <option  value="{{$nogometas->nacionalnost_fk}}">{{$nogometas->Naziv_drzave}}</option>>   
                    @foreach($drzave as $item)
                      <option value="{{ $item->drzava_id }}">{{ $item->Naziv_drzave }}</option>
                    @endforeach
                  </select>
                @error('nacionalnost_fk')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="noga_fk"
                    class="inline-block text-lg mb-2"
                    >Noga</label
                >
                <select name="noga_fk" id="noga_fk" class="border border-gray-200 rounded p-2 w-full">
                    <option  value="{{$nogometas->noga_fk}}">{{$nogometas->Naziv}}</option>>   
                    @foreach($noga as $item)
                      <option value="{{ $item->noga_id }}">{{ $item->Naziv }}</option>
                    @endforeach
                  </select>
                @error('noga_fk')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="pozicija_fk"
                    class="inline-block text-lg mb-2"
                    >Pozicije</label
                ><br>
                @foreach($pozicije as $item)
                    @php
                       $kontrola = 0 
                    @endphp
                    @foreach($pozicijaNogometas as $pn)
                        @if($item->pozicija_id == $pn->pozicija_fk)
                            @php
                                $kontrola = 1
                            @endphp
                            
                        @endif        
                    @endforeach
                    @if ($kontrola == 0)
                        <input type="checkbox" value="{{$item->pozicija_id}}" name="pozicija_fk[]" id="pozicija_fk"  >
                        <label>{{$item->Naziv_pozicije}}</label><br/>
                        @else 
                            <input type="checkbox" value="{{$item->pozicija_id}}" name="pozicija_fk[]" id="pozicija_fk" checked >
                            <label>{{$item->Naziv_pozicije}}</label><br/>
                    @endif
                    
                @endforeach
                @error('pozicija_fk')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black"
                >
                    Spremi
                </button>

               
            </div>
        </form>
    </div>
</div>
@endsection