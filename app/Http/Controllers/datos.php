<?php

namespace App\Http\Controllers;

use App\Models\representante;
use DB;
use Illuminate\Http\Request;

class datos extends Controller
{

    public function buscarest(Request $request)
    {

        request()->validate([

            'bci' => 'required|min:7|max:9',

        ]);

        $cedula = $request->bci;
        $datos  = datos_estudiante::all();
        $n      = count($datos);
        $id     = 0;
        for ($i = 0; $i < $n; $i++) {
            $datos1 = $datos[$i];
            if (strcmp($datos1->ciest, $cedula) === 0) {
                $id = $datos1->id;
            }

        }

        $result = datos_estudiante::find($id);

        $result1 = datos_representante::find($id);

        $result2 = curso_estudiante::find($id);

        $result3 = representante::find($id);

        return view('vermas')->with('result', $result)->with('result2', $result2)->with('result3', $result3)->with('result1', $result1);
    }

    public function mostrar(Request $data)
    {

        $year   = $data['year'];
        $secc   = $data['secc'];
        $datos1 = DB::table('representantes')

            ->join('datos_representantes', 'datos_representantes.ci', '=', 'representantes.cirep')

            ->join('datos_estudiantes', 'datos_estudiantes.ciest', '=', 'representantes.ciest')
            ->join('curso_estudiantes', 'curso_estudiantes.ciest', '=', 'representantes.ciest')
            ->select('datos_representantes.nombrerep', 'representantes.ciest', 'datos_representantes.telefono', 'representantes.cirep', 'datos_estudiantes.nombre', 'datos_estudiantes.apellidos', 'curso_estudiantes.codmat', 'curso_estudiantes.secmat', 'datos_estudiantes.edad', 'datos_estudiantes.correo')
            ->where('curso_estudiantes.codmat', '=', $year)
            ->where('curso_estudiantes.secmat', '=', $secc)
            ->get();

        view('')->with('result', $datos)->with('year', $year)->with('seccion', $secc);
    }

}
