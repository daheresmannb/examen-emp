<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;
use Response;
use Validator;

class LibroController extends Controller {
    public function ShowLibros(Request $request) {
        $respuesta['exito']     = true;
        $respuesta['respuesta'] = Libro::all();
        return response()->json($respuesta);
    }

    public function CreateLibros(Request $request) {
        $val = Validator::make(
            $request->all(), [
                'codlib'          => 'required',
                'titlib'          => 'required',
                'codtem'          => 'required',
                'codaut'          => 'required'
            ]
        );

        if ($val->fails()) {
            $respuesta['exito']     = true;
            $respuesta['respuesta'] = $val->messages();
        } else {

            $libro = Libro::create($request->all());
            $respuesta['exito']     = false;
            $respuesta["respuesta"] = "registrado correctamente";
        }
        return response()->json($respuesta);
    }

    public function ReadLibros(Request $request) {
        $val = Validator::make(
            $request->all(), [
                'codlib'          => 'required'
            ]
        );

        if ($val->fails()) {
            $respuesta['exito']     = false;
            $respuesta['respuesta'] = $val->messages();
        } else {
            $libro = Libro::find($request->codlib);
            if (!empty($libro)) {
                $respuesta['exito']     = true;
                $respuesta["respuesta"] = $libro;
            } else {
                $respuesta['exito']     = false;
                $respuesta["respuesta"] = "Registro no encontrado";
            }
        }
        return response()->json($respuesta);
    }

    public function UpdateLibros(Request $request) {
        $val = Validator::make(
            $request->all(), [
                'codlib'          => 'required',
                'titlib'          => 'required',
                'codtem'          => 'required',
                'codaut'          => 'required'
            ]
        );

        if ($val->fails()) {
            $respuesta['exito']     = false;
            $respuesta['respuesta'] = $val->messages();
        } else {
            $libro = Libro::find($request->codlib);
            if (!empty($libro)) {
                $libro->titlib = $request->titlib;
                $libro->codtem = $request->codtem;
                $libro->codaut = $request->codaut;
                $libro->update();

                $respuesta['exito']     = false;
                $respuesta["respuesta"] = "Actualizado correctamente";
            } else {
                $respuesta['exito']     = false;
                $respuesta["respuesta"] = "Registro no encontrado";
            }
        }
        return response()->json($respuesta);
    }

    public function DeleteLibros(Request $request) {
        $val = Validator::make(
            $request->all(), [
                'codlib'          => 'required'
            ]
        );

        if ($val->fails()) {
            $respuesta['exito']     = false;
            $respuesta['respuesta'] = $val->messages();
        } else {
            $libro = Libro::find($request->codlib);
            if (!empty($libro)) {
                $libro->delete();

                $respuesta['exito']     = false;
                $respuesta["respuesta"] = "El registro ha sido borrado";
            } else {
                $respuesta['exito']     = false;
                $respuesta["respuesta"] = "Registro no encontrado";
            }
        }
        return response()->json($respuesta);
    }
}
