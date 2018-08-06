<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller {
    public function ver($id) {
        return response("Me pasaste $id como parametro");
    }


    public function ver_lindo(Request $request, $id) {
        $nombre = $request->query('nombre', '');
        return view("ver_lindo", ['id' => $id, 'nombre' => $nombre]);
    }

    public function guardar_sesion($edad) {
        session(['edad'=>$edad]);
        return response('Ok');
    }

    public function ver_sesion() {
        return response('En la sesion esta guardado '.session('edad', 'No definida'));
    }

    public function add() {
        $persona = new \App\Persona();
        $persona->nombre = 'Orlando';
        $persona->telefono = '112233';
        $persona->save();
        return response('ok');
    }

    public function listar() {
        return \App\Persona::all();
    }
}


?>
