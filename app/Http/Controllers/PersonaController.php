<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PersonaController extends Controller {



    public function listar() {
        $listado = \App\Persona::all();
        return view('persona_listar', ['listado' => $listado]);
    }

    public function nuevo() {
        return view('persona_form', ['persona' => new \App\Persona()]);
    }

    public function agregar(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|min:4',
            'telefono' => 'required',
        ]);
        $persona = new \App\Persona();
        $persona->nombre = $request->input("nombre");
        $persona->telefono = $request->input("telefono");
        $persona->save();

        return redirect()->action('PersonaController@listar');
    }

    public function editar($id) {
        $persona = \App\Persona::find($id);
        if (!$persona) {
            return (new Response("No encontrado", 404));
        }
        return view('persona_form', ['persona' => $persona]);
    }


    public function actualizar(Request $request, $id) {
        $this->validate($request, [
            'nombre' => 'required|min:4',
            'telefono' => 'required',
        ]);
        $persona = \App\Persona::find($id);
        if (!$persona) {
            return (new Response("No encontrado", 404));
        }
        $persona->nombre = $request->input("nombre");
        $persona->telefono = $request->input("telefono");
        $persona->save();

        return redirect()->action('PersonaController@listar');
    }

    public function borrar($id) {
        $persona = \App\Persona::find($id);
        if (!$persona) {
            return (new Response("No encontrado", 404));
        }
        $persona->delete();
        return redirect()->action('PersonaController@listar');
    }    
}


?>
