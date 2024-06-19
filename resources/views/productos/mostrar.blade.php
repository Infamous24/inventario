@extends('layout.plantilla')

@section('titulo','mostrar')

@section('contenido')




<header class="bg-white shadow">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<h1 class="text-3xl font-bold tracking-tight text-gray-900">Producto: {{ $producto->id }}</h1>
</div>
</header>

<div class="container size-1/2 m-auto"> 

<div class="px-4 sm:px-0">
<h3 class="text-base font-semibold leading-7 text-gray900">Este es el producto: {{ $producto->id }}</h3>
<p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles del producto</p>
</div>

<div class="mt-6 border-t border-gray-100">
<dl class="divide-y divide-gray-100">

<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
<dt class="text-sm font-medium leading-6 text-gray-900">Nombre:</dt>
<dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{ $producto->nombre}}</dd>
</div>
<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
<dt class="text-sm font-medium leading-6 text-gray-900">Precio:</dt>
<dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{ $producto->precio}}</dd>
</div>

<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
<dt class="text-sm font-medium leading-6 text-gray-900">Categoria:</dt>
<dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{ $producto->categoria}}</dd>
</div>
<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
<dt class="text-sm font-medium leading-6 text-gray-900">Descripcion:
</dt>
<dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{ $producto->descripcion }}</dd>
</div>
<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
<dt class="text-sm font-medium leading-6 text-gray-900">Categoria tabla:</dt>
<dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{ $producto->categoria_id}} - {{ $categoria->nombre}}</dd>
</div>

<div class="p-5 " >
<div class="flex justify-right items-baseline flex-wrap">
 <div class="flex m-2">

<a href="{{ route('producto.principal') }}"><button class="text-base rounded-r-none hover:scale-110 focus:outlinenone flex justify-center px-4 py-2 rounded font-bold cursor-pointer
hover:bg-gray-200
bg-gray-100
text-gray-700
border duration-200 ease-in-out
border-gray-600 transition"> 
 <div class="flex leading-5">
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather featherchevron-left w-5 h-5"><polyline points="15 18 9 12 15 6"></polyline>
</svg>Volver</div>

</button>
</a>
 <!--AGREGAMOS LA RUTA
DE LA VISTA EDIT, AL BOTON EDITAR -->
<a href="{{ route('producto.editar', $producto) }}"><button class="text-base rounded-l-none hover:scale-110 focus:outlinenone flex justify-center px-4 py-2 rounded font-bold cursor-pointer
hover:bg-teal-700 hover:text-teal-100
bg-teal-100
text-teal-700
border duration-200 ease-in-out
border-teal-600 transition">
<div class="flex leading-5">
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather featheredit w-5 h-5 mr-1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2
0 0 0 2-2v-7"> </path>
<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
<circle cx="12" cy="12" r="3"></circle></svg>Editar</div>
</button>
</a>
</div>
</div>
</div>
</dl>
</div>
</div>
<br>


@endsection
