@extends('layout')
@section('content')

<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-7">
                Uredi agenciju
            </h2>
        </header>

        <form method="POST" action="{{route('spremiPromjene',$agencija->agencija_id)}}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="Naziv_agencije"
                    class="inline-block text-lg mb-2"
                    >Naziv agencije</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Naziv_agencije"
                    value="{{$agencija->Naziv_agencije}}"
                />
                @error('Naziv_agencije')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="Vlasnik" class="inline-block text-lg mb-2"
                    >Vlasnik</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Vlasnik"
                    value="{{$agencija->Vlasnik}}"
                />
                @error('Vlasnik')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="Email"
                    class="inline-block text-lg mb-2"
                    >Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Email"
                    placeholder="Na primjer: test@mail.com"
                    value="{{$agencija->Email}}"
                />
                @error('Email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="Kontakt" class="inline-block text-lg mb-2"
                    >Kontakt broj</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    placeholder="Na primjer: 063-111-111"
                    name="Kontakt"
                    value="{{$agencija->Kontakt}}"
                />
                @error('Kontakt')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            

            <div class="mb-6">
                <button
                    class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black"
                >
                    Spremi
                </button>

                <a href="{{route('pocetna')}}" class="text-black ml-4"> Povratak </a>
            </div>
        </form>
    </div>
</div>
@endsection