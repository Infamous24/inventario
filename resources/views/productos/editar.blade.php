@extends('layout.plantilla')

@section('titulo', 'editar')

@section('contenido')

<header class="bg-white shadow">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<h1 class="text-3xl font-bold tracking-tight text-gray-900">Editar Un Registro</h1>
</div>
</header>

<div class='flex items-center justify-center min-h-screen from-teal-100
via-teal-300 to-teal-500 bg-gradient-to-br'>
<div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg
shadow-xl'>
<div class='max-w-md mx-auto space-y-6'>
<form action="{{route('producto.update',$producto)}}" method="POST">
@csrf
@method('put')
<h2 class="text-2xl font-bold ">Actualizar Datos Del Producto{{$producto->id}}</h2>
<br>
<p > Modifique los Datos</P>
<hr class="my-6">

<label class="uppercase text-sm font-bold opacity70">Nombre</label>
<br>
<input type="text" name="nombre" value="{{$producto->nombre}}" class="p-3 mt-2 mb-4 wfull bg-slate-200 rounded border-2 border-slate-200 focus:border-slate600 focus:outline-none">
<br>
<label class="uppercase text-sm font-bold opacity70">Precio</label>
<br>
<input type="text" name="precio" value="{{$producto->precio}}" class="p-3 mt-2 mb-4 wfull bg-slate-200 rounded border-2 border-slate-200 focus:border-slate600 focus:outline-none">
<br>
<label class="uppercase text-sm font-bold opacity70">Descripcion</label>
<input type="text" name="descripcion" value="{{$producto->descripcion}}" class="p-3 mt-2 mb4 w-full bg-slate-200 rounded">
<label class="uppercase text-sm font-bold opacity70">Categoria</label>
<input type="text" name="categoria" value="{{$producto->categoria}}" class="p-3 mt-2 mb-4
w-full bg-slate-200 rounded">

<label class="uppercase text-sm font-bold opacity-70">Categoria_Tabla</label>
<select name="categoria_id" class="w-full p-3 mt-2 mb-4 w-full bgslate-200 rounded border-2 border-slate-200 focus:border-slate-600
focus:outline-none">
 <option value="">{{$categoria_actual->nombre}}</option>
@foreach ($categorias as $cat )
<option value="{{$cat->id}}">{{$cat->nombre}}</option>
@endforeach
</select>

<br>
<input type="submit" class="py-3 px-6 my-2 bg-blue-500 text-white
font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out
duration-300" value="Guardar Cambios">
</form>
<a href="{{ route('producto.principal') }}">
<button
class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded
hover:bg-indigo-500 cursor-pointer ease-in-out duration300">Cancelar</button>
</a>
</div>
</div>
</div>


@endsection
