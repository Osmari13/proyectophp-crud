@extends('layouts.plantilla')

@section('title', 'Libros edit')

@section('content')
 <h1>En esta pagina se Actualiza el Libro</h1>

 <form action="{{route('libros.update', $libro)}}" method="POST">
   
    @csrf

    @method('put')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12"> 

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nombre del libro </label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        
                        <input type="text" name="nombre" value="{{old('nombre', $libro->nombre)}}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                        </div>
                    </div>
                </div>


                @error('nombre')
                    *{{$message}}
                @enderror
                

            
                    <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Categoria </label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        
                        <input type="text" name="categoria" value="{{old('categoria', $libro->categoria)}}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                        </div>
                    </div>
                </div>

                @error('categoria')
                    *{{$message}}
                @enderror

                
                    <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Autor </label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        
                        <input type="text" name="autor" value="{{old('autor', $libro->autor)}}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                        </div>
                    </div>
                </div>

                @error('autor')
                *{{$message}}
                @enderror

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Descripcion</label>
                    <div class="mt-2">
                    <textarea  name="descripcion" rows="3"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{old('descripcion', $libro->descripcion)}}</textarea>
                    </div>
                </div>

                

                
                @error('descripcion')
                *{{$message}}
                @enderror
                
                    <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Editorial </label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        
                        <input type="text" name="editorial" value="{{old('editorial', $libro->editorial)}}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                        </div>
                    </div>
                </div>

                @error('editorial')
                    *{{$message}}
                @enderror

               
                <div class="sm:col-span-4">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
 </form>
@endsection