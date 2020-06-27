<?php

namespace App\Http\Controllers;

use App\Contacto;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Auth;
class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user() && Auth::user()->tipo_de_usuario == 2){
            $contactos = Contacto::all();
            return view('admin.contactos.index')->with('contactos', $contactos);
        } else {
            return view('front.contacto');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $req)
    {
        $this->validate($req, [
            'nombre' => ['required', 'string', 'max:25'],
            'apellido' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email:rfc,dns', 'max:50'],
            'mensaje' => ['required', 'string'],
        ]);

        $contactoACrear = [
            'nombre' => $req["nombre"],
            'apellido' => $req["apellido"],
            "email" => $req["email"],
            "mensaje" => $req["mensaje"]
        ];
        Contacto::create($contactoACrear);
        return redirect('/')->with('status', 'El formulario de contacto se ha enviado correctamente. En breve nos pondremos en contacto con usted!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        if ($request['action'] === "success") {
            $contacto->status = "Finalizado";
            $contacto->save();
            return redirect()->route('contactos.index')->with("status", "El formulario ha sido marcado como finalizado.");        
        } else if ($request['action'] === "warning") {
            $contacto->status = "En seguimiento";
            $contacto->save();
            return redirect()->route('contactos.index')->with("status", "El formulario ha sido marcado como En Seguimiento");        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contactos.index')->with('status', 'El formulario de contacto se eliminó correctamente');
    }
    
    // Middleware
    public function __construct()
    {
        $this->middleware('auth')->only('destroy', 'update');
        $this->middleware('administrador')->only('destroy', 'update');
    }
}
