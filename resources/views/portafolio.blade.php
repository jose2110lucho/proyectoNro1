@extends('layout')

@section('contenido')
    <h1>portafolio</h1>


    <ul>
            @if($array)

                @foreach ($array as $arrayItem)
                <li>{{$arrayItem['title']}}</li>
                @endforeach

            @else

                <li>no hay nada para mostrar</li>    
                
            @endif

            
        
    </ul>

@endsection


