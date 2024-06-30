<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class rolescontroller extends Controller
{
    public function principal()
    {
        $categoria = Role::withTrashed ()->paginate(5);
        return view('roles.principal', ['prod' => $categoria]);
    }

    public function crear()
    {
        $categorias = Role::all();
        return view('roles.crear', compact('categorias'));
    }

    public function store(Request $request)
    {
        $pro=new Role();
        $pro->nombre=$request->nombre;

        // return $request->all();
        $pro->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('roles.mostrar', $pro->id);

    }

    public function mostrar($cat_id)
    {
       
        $categoria = Role::find($cat_id);
       // $cat_nomm=$categoria->nombre;
        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("roles.mostrar", compact('categoria'));
    }

    public function editar(Role $producto)
    {
        $cat_id=$producto->categoria_id;
        $categoria_actual = Role::find($cat_id);
        $categorias = Role::all();
        
        return view("roles.editar", compact('producto','categorias','categoria_actual'));
    }

    public function update(Request $request,Role $producto)
    {
      
        $producto->nombre=$request->nombre;
        
        $producto->save();

        return redirect()->route('roles.principal', $producto->id);

    }

    public function borrar($id)
    {
        $producto = Role::withTrashed ()->find($id);
        $producto->forceDelete();//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('roles.principal');//redireccionamos a lavista index
    }
    
    
    public function desactivaproducto($id)
    {
        $producto = Role::find($id);
        $producto->Delete();//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('roles.principal');//redireccionamos a lavista index
    }
    
    public function activaproducto($id)
    {
        $producto = Role::withTrashed ()->find($id);
        $producto->Restore($id);//usamos el metodo delete para eliminar elobjeto
    return redirect()->Route('roles.principal');//redireccionamos a lavista index
    }
}
