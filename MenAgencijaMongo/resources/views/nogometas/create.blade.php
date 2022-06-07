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

        <form method="POST" action="{{route('storeNogometas')}}">
            @csrf
            
            <div class="mb-6">
                <label for="Ime" class="inline-block text-lg mb-2"
                    >Ime</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Ime"
                    value="{{old('Ime')}}"
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
                    value="{{old('Prezime')}}"
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
                    value="{{old('Visina')}}"
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
                   
                    value="{{old('Vrijednost')}}"
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
                    value="{{old('Datum_rodjenja')}}"
                />
                @error('Datum_rodjenja')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="Nacionalnost"
                    class="inline-block text-lg mb-2"
                    >Nacionalnost</label
                >
                <select name="Nacionalnost" id="Nacionalnost" class="border border-gray-200 rounded p-2 w-full">
                    <option disabled selected value="">Izaberite državu</option>>   
                    @foreach($drzave as $item)
                      <option value="{{ $item->Naziv  }}">{{ $item->Naziv }}</option>
                    @endforeach
                  </select>
                @error('Nacionalnost')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="Noga"
                    class="inline-block text-lg mb-2"
                    >Noga</label
                >
                <select name="Noga" id="Noga" class="border border-gray-200 rounded p-2 w-full">
                    <option disabled selected value="">Izaberite državu</option>>  
                    <option value="Lijeva">Lijeva</option>
                    <option value="Desna">Desna</option>
                    <option value="Obje">Obje</option>
                </select>

                @error('Noga')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label
                    for="Pozicija"
                    class="inline-block text-lg mb-2"
                    >Pozicije</label
                ><br>
                @foreach($pozicije as $item)
                    <input type="checkbox" value="{{$item}}" name="Pozicija[]" id="Pozicija">
                    <label>{{$item}}</label><br/>
                @endforeach
                
                @error('Pozicija')
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