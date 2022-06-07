@extends('layout')
@section('content')
<div class="flex justify-center">
    <table class="w-1/2 table-auto rounded-sm">
        <tbody>
            <tr class="border-gray-300">
                <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <h3 class="font-bold uppercase">Ime</h3> 
                    </td>

                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <h3 class="uppercase">{{$nogometas->Ime}}</h3> 
                    </td>
                    
                    
            </tr>
            <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <h3 class="font-bold uppercase">Prezime</h3> 
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <h3 class="uppercase">{{$nogometas->Prezime}}</h3> 
                    </td>
            </tr>
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Nacionalnost</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="uppercase">{{$nogometas->Nacionalnost}}</h3> 
                </td>
            </tr>
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Datum rođenja</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="uppercase">{{$nogometas->Datum_rodjenja}}</h3> 
                </td>
             </tr>
             <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Noga</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="uppercase">{{$nogometas->Noga}}</h3> 
                </td>
             </tr>
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Vrijednost (mil)</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="uppercase">{{$nogometas->Vrijednost}}</h3> 
                </td>
            </tr>
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Pozicija</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                @foreach($pozicija as $item)
                    <h3 class="uppercase">{{$item}} </h3> 
                @endforeach
                </td>
            </tr>
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="font-bold uppercase">Visina</h3> 
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <h3 class="uppercase">{{$nogometas->Visina}}</h3> 
                </td>
            </tr>
            
        </tbody>
    </table>
    
</div>
<div class="flex justify-center mb-4">
    <a href="{{route('nogometasPocetna')}}" class="inline-block text-success py-2 px-4 mt-4 ml-4 "
                    ><i class="fa-solid fa-arrow-left"></i> Povratak
                </a>
</div>
@endsection