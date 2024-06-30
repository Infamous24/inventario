<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class categoriacontroller extends Controller
{
    
    public function principal()
    {
        $categoria = Categoria::withTrashed ()->paginate(5);
        return view('Categorias.principal', ['prod' => $categoria]);
    }
    public function crear()
    {
        $categorias = Categoria::all();
        return view('categorias.crear', compact('categorias'));
    }
    public function mostrar($cat_id)
    {
       
        $categoria = Categoria::find($cat_id);
       // $cat_nomm=$categoria->nombre;
        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("categorias.mostrar", compact('categoria'));
    }

    public function store(Request $request)
    {
        $pro=new Categoria();
        $pro->nombre=$request->nombre;

        // return $request->all();
        $pro->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('categorias.mostrar', $pro->id);

    }

    public function editar(Categoria $producto)
    {
        $cat_id=$producto->categoria_id;
        $categoria_actual = Categoria::find($cat_id);
        $categorias = Categoria::all();
        
        return view("categorias.editar", compact('producto','categorias','categoria_actual'));
    }

    public function update(Request $request,Categoria $producto)
    {
      
        $producto->nombre=$request->nombre;
        
        $producto->save();

        return redirect()->route('categoria.principal', $producto->id);

    }


    public function borrar($id)
    {
        $producto = Categoria::withTrashed ()->find($id);
        $producto->forceDelete();//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('categoria.principal');//redireccionamos a lavista index
    }
    
    
    public function desactivaproducto($id)
    {
        $producto = Categoria::find($id);
        $producto->Delete();//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('categoria.principal');//redireccionamos a lavista index
    }
    
    public function activaproducto($id)
    {
        $producto = Categoria::withTrashed ()->find($id);
        $producto->Restore($id);//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('categoria.principal');//redireccionamos a lavista index
    }

}
