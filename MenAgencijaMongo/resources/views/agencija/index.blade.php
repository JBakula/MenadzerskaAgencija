@extends('layout')

@section('content')
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Popis menadžerskih agencija
            </h1>
        </header>
        <a href="{{route('agencijaCreate')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-4 mb-2 rounded-sm">
            Dodaj novu
          </button></a>
        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                           <h3 class="font-bold uppercase">Naziv agencije</h3> 
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <h3 class="font-bold uppercase">Vlasnik</h3>
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <h3 class="font-bold uppercase">Email</h3>
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <h3 class="font-bold uppercase">Kontakt</h3>
                        </td>
                </tr>
                @foreach($agencije as $item)
                    <tr class="border-gray-300">
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <a href="{{route('prikazKlijenata',$item->_id)}}">
                                {{$item->Naziv_agencije}}
                            </a>
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            {{$item->Vlasnik}}
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            {{$item->Email}}
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            {{$item->Kontakt}}
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <a
                                href="{{route('editAgenciju',$item->_id)}}"
                                class="text-blue-400 px-6 py-2 rounded-xl"
                                ><i
                                    class="fa-solid fa-pen-to-square"
                                ></i>
                                Edit</a
                            >
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <form method="POST" action="{{route('deleteAgencija',$item->_id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">
                                    <i
                                        class="fa-solid fa-trash-can"
                                    ></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6 p-4">
            {{$agencije->links()}}
        </div>
    </div>
</div>
@endsection