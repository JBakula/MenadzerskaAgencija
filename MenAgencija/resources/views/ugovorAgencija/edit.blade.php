@extends('layout')
@section('content')

<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-7">
                Uredi ugovor
            </h2>
        </header>

        <form method="POST" action="{{route('spremiPromjeneUgovor',$ugovor->ugovor_nogometas_agencija_id)}}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="nogometas_fk"
                    class="inline-block text-lg mb-2"
                    >Nogometaš</label
                ><!--
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Naziv_agencije"
                    value="{{old('Naziv_agencije')}}"
                />-->
                <select name="nogometas_fk" id="nogometas_fk" class="border border-gray-200 rounded p-2 w-full">
                    <option  value="{{$ugovor->nogometas_fk}}">{{ $ugovor->Ime }} {{$ugovor->Prezime}}</option>>   
                    @foreach($nogometasi as $item)
                      <option value="{{ $item->nogometas_id }}">{{ $item->Ime }} {{$item->Prezime}}</option>
                    @endforeach
                  </select>
                @error('nogometas_fk')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="Postotak_od_transfera" class="inline-block text-lg mb-2"
                    >Postotak od transfera</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Postotak_od_transfera"
                    value="{{$ugovor->Postotak_od_transfera}}"
                />
                @error('Postotak_od_transfera')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="Postotak_od_godisnje_place"
                    class="inline-block text-lg mb-2"
                    >Postotak godišnje plaće</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Postotak_od_godisnje_place"
                    value="{{$ugovor->Postotak_od_godisnje_place}}"
                />
                @error('Postotak_od_godisnje_place')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <input type="hidden" id="agencija_fk" name="agencija_fk" value="{{$agencija_id}}">

            <div class="mb-6">
                <button
                    class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black"
                >
                    Spremi
                </button>

                <a href="{{route('prikazKlijenata',$agencija_id)}}" class="text-black ml-4"> Povratak </a>
            </div>
        </form>
    </div>
</div>
@endsection