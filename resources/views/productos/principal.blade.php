@extends('layout.plantilla')

@section('titulo','principal')

@section('contenido')

<header class="bg-white shadow">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<h1 class="text-3xl font-bold tracking-tight text-gray-900">Lista
de productos</h1>
</div>
</header>

<br>
<div class="container size-11/12 m-auto">
<a href="{{route('producto.crear')}}"><button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-1 px-2 border border-indigo-500 rounded">New Registro</button></a>
<br>
<br>


<table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Precio</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Descripcion</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Categoria</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Acciones</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
        @foreach ($prod as $produ )
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span>{{$produ->nombre}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Precio</span>{{$produ->precio}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Descripcion</span>{{$produ->descripcion}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Categoria</span>{{$produ->categoria}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Acciones</span>
					<div class="mx-auto max-w-7xl px-2 py-2 sm:px-4 lg:px-4">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a href="{{route('producto.mostrar',$produ->id)}}">Ver</button></a>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('producto.editar',$produ)}}">Editar</button></a>
                    </div>
					<form action="{{route('producto.borrar', $produ)}}" method="POST">
                      
                       @method('delete')  
					   @csrf
                       
					   @if ($produ->deleted_at)
							<button type="button"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('activapro',$produ->id)}}">activar</a></button>
							<input type="submit"class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" value="Borrar" onclick="if(!confirm('¿Desea eliminar a :{{$produ->nombre}}?')){return false;}"/>
							@else
						  
							<button type="button"class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 border border-gray-500 rounded"><a href="{{route('desactivapro',$produ->id)}}">desactivar</a></button>
							@endif
                            </form>
							
				</td>
			</tr>
			
            @endforeach
			
		</tbody>
		
	</table>
<br>
	{{$prod->links()}}
</div>



@endsection