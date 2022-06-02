@extends('layout')
@section('content')

<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-7">
                Dodaj državu
            </h2>
        </header>

        <form method="POST" action="{{route('storeDrzavu')}}">
            @csrf
            <div class="mb-6">
                <label
                    for="Naziv_drzave"
                    class="inline-block text-lg mb-2"
                    >Naziv države</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Naziv_drzave"
                    value="{{old('Naziv_drzave')}}"
                />
                @error('Naziv_drzave')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            
            <div class="mb-6">
                <button
                    class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black"
                >
                    Spremi
                </button>

                <a href="{{route('drzave')}}" class="text-black ml-4"> Povratak </a>
            </div>
        </form>
    </div>
</div>
@endsection