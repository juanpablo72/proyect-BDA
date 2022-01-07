<?php

namespace App\Http\Controllers;

//se añadio models line
use App\Models\curso_estudiante;
use App\Models\datos_estudiante;
//borrar modelos de abajo
use App\Models\datos_representante;
use App\Models\documentos;
use App\Models\representante;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' => 'index']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getuser()
    {
        $datos = User::all();
        return view('admin', compact('datos'));
        //  return view('admin');
    }
    //funcion de carga img
    public function handle(Request $request)
    {

        $pathTofile = $request->file('cireg');

        documentos::create([
            'status' => $pathTofile,

        ]);
        return $pathTofile;

    }
    public function vermas($ciest)
    {
        $result = datos_estudiante::find($ciest);

        $result1 = datos_representante::find($ciest);

        $result2 = curso_estudiante::find($ciest);

        $result3 = representante::find($ciest);

        return view('vermas')->with('result', $result)->with('result2', $result2)->with('result3', $result3)->with('result1', $result1);
    }
    public function index()
    {

        $datos = DB::table('representantes')

            ->join('datos_representantes', 'datos_representantes.ci', '=', 'representantes.cirep')

            ->join('datos_estudiantes', 'datos_estudiantes.ciest', '=', 'representantes.ciest')
            ->join('curso_estudiantes', 'curso_estudiantes.ciest', '=', 'representantes.ciest')
            ->select('datos_representantes.nombrerep', 'representantes.ciest', 'datos_representantes.telefono', 'representantes.cirep', 'datos_estudiantes.nombre', 'datos_estudiantes.apellidos', 'curso_estudiantes.codmat', 'curso_estudiantes.secmat', 'datos_estudiantes.edad', 'datos_estudiantes.correo', 'datos_estudiantes.id')
            ->get();
        //return $datos;
        return view('home')->with('datos', $datos);
    }
    public function index1()
    {

        $datos = DB::table('representantes')

            ->join('datos_representantes', 'datos_representantes.ci', '=', 'representantes.cirep')

            ->join('datos_estudiantes', 'datos_estudiantes.ciest', '=', 'representantes.ciest')
            ->join('curso_estudiantes', 'curso_estudiantes.ciest', '=', 'representantes.ciest')
            ->select('datos_representantes.nombrerep', 'representantes.ciest', 'datos_representantes.telefono', 'representantes.cirep', 'datos_estudiantes.nombre', 'datos_estudiantes.apellidos', 'curso_estudiantes.codmat', 'curso_estudiantes.secmat', 'datos_estudiantes.edad', 'datos_estudiantes.correo', 'datos_estudiantes.id')
            ->get();
        //return $datos;
        return view('home')->with('datos', $datos);
    }
//boton de borrar en la pestaña home de mostar todo

    public function todoAS(Request $data)
    {
        $mensaje = "";
        $year    = $data['year'];
        $secc    = $data['secc'];
        $datos1  = DB::table('representantes')

            ->join('datos_representantes', 'datos_representantes.ci', '=', 'representantes.cirep')

            ->join('datos_estudiantes', 'datos_estudiantes.ciest', '=', 'representantes.ciest')
            ->join('curso_estudiantes', 'curso_estudiantes.ciest', '=', 'representantes.ciest')
            ->select('datos_representantes.nombrerep', 'representantes.ciest', 'datos_representantes.telefono', 'representantes.cirep', 'datos_estudiantes.nombre', 'datos_estudiantes.apellidos', 'curso_estudiantes.codmat', 'curso_estudiantes.secmat', 'datos_estudiantes.edad', 'datos_estudiantes.correo')
            ->where('curso_estudiantes.codmat', '=', $year)
            ->where('curso_estudiantes.secmat', '=', $secc)
            ->get();

        return view('mostraras')->with('result', $datos1)->with('year', $year)->with('seccion', $secc);
    }

    public function eliminarestudiante($ciest)
    {

        $result = datos_estudiante::find($ciest);
        $result->delete();
        $result1 = datos_representante::find($ciest);
        $result1->delete();
        $result2 = curso_estudiante::find($ciest);
        $result2->delete();
        $result3 = representante::find($ciest);
        $result3->delete();

        return back()->with('eliminar', 'datos eliminados');
    }
    public function eliminar($id)
    {
        $borrar = User::findOrfail($id);
        $borrar->delete();
        return back();
    }
    public function agregar(Request $data)
    {
        /*
        $request

        $newuser = new User;
        $newuser ->name =$request->name;
        $newuser ->email =$request->email;
        $pass=$request->password;
        $newuser ->password = $pass ;
        $newuser->save();
        return back()->with('agregar','usuario registardo');

        return */
        if (User::where('email', '=', $data['email'])->exists()) {
            // user found
            $mensaje = 'El correo indicado esta asignado a un usuario existente';
            return view('newuser');

        } else {
            User::create([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'password'  => Hash::make($data['password']),
                'codigo'    => 'user',
                'fullacess' => 'no',
            ]);
            return view('newuser');
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function nuevo()
    {
        return view('newuser');
    }

    public function edit($id)
    {
        $editar = User::findOrfail($id);
        return view('edituser', compact('editar'));
    }

    public function modificar($ciest)
    {

        $result = datos_estudiante::find($ciest);

        $result1 = datos_representante::find($ciest);

        $result2 = curso_estudiante::find($ciest);

        $result3 = representante::find($ciest);

        return view('modificar')->with('result', $result)->with('result2', $result2)->with('result3', $result3)->with('result1', $result1);
    }

    public function update(Request $request, $id)
    {

        request()->validate([
            'name'     => 'required',
            'email'    => 'required|email ',
            'password' => 'required|min:4',

        ]);
        $actualizar           = User::findOrfail($id);
        $actualizar->name     = $request->name;
        $actualizar->email    = $request->email;
        $actualizar->password = Hash::make($request['password']);
        $actualizar->save();
        return back()->with('agregar', 'datos modificados');
        /*

    User::update([
    'name' => $data['name'],
    'email' => $data['email'],
    'password' => Hash::make($data['password']),
    'codigo'=>'user',
    'fullacess'=>'no',
    ]); } */

    }

    public function cambiodatos(Request $request, $id)
    {
        request()->validate([
            'cireg'      => 'required|min:7|max:8',
            'nombreg'    => 'required|min:4',
            'apelreg'    => 'required|min:4',
            'edadreg'    => 'required|min:1|max:2',
            'nacreg'     => 'required|min:4',
            'mailreg'    => 'required|email',
            'cirepreg'   => 'required|min:7|max:8',
            'nombrepreg' => 'required|min:4',
            'dirreg'     => 'required|min:6',
            'telefono'   => 'required|min:11|max:12',

        ]);

        $actualizar            = datos_estudiante::findOrfail($id);
        $actualizar->ciest     = $request->cireg;
        $actualizar->nombre    = $request->nombreg;
        $actualizar->apellidos = $request->apelreg;
        $actualizar->lugarnac  = $request->nacreg;
        $actualizar->edad      = $request->edadreg;
        $actualizar->correo    = $request->mailreg;
        $actualizar->save();

        $actualizar1        = representante::findOrfail($id);
        $actualizar1->ciest = $request->cireg;
        $actualizar1->cirep = $request->cirepreg;
        $actualizar1->save();

        $actualizar2            = datos_representante::findOrfail($id);
        $actualizar2->ci        = $request->cirepreg;
        $actualizar2->nombrerep = $request->nombrepreg;
        $actualizar2->direccion = $request->dirreg;
        $actualizar2->telefono  = $request->telefono;

        $actualizar2->save();

        $actualizar3         = curso_estudiante::findOrfail($id);
        $actualizar3->ciest  = $request->cireg;
        $actualizar3->codmat = $request->Areg;
        $actualizar3->secmat = $request->seccreg;

        $actualizar3->save();

        return back()->with('agregar', 'datos modificados');

    }

}
