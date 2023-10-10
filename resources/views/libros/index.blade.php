@extends('layouts.plantilla')

@section('title', 'Libros')

@section('content')
 
 
 <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-xl border-b-4  border-black-600 rounded-lg font-semibold leading-7 text-black sm:grid-cols-2 md:flex lg:gap-x-10 pl-2">
    <a href="{{ route('libros.create') }}">Registrar libro<span aria-hidden="true">&rarr;</span></a>
 </div>


 <ul role="list" class="divide-y divide-gray-100">
    
        @foreach ($libros as $libro)
            <li class="flex justify-between gap-x-6 py-5">
                <a href="{{route('libros.show', $libro->id)}}">{{$libro->nombre}}</a> 
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <a  href="{{route('libros.show', $libro->id)}}" class="text-sm leading-6 text-gray-900">Ver mas<span aria-hidden="true">&#x27A3;</span></a>   
                </div>
            </li>
        @endforeach
    
 </ul>

 {{$libros->links()}}
@endsection
