<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
class categoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        if (Auth::user() && Auth::user()->tipo_de_usuario = 2) {
            return view('admin.categorias.index')->with('categorias', $categorias);
        } else {
            return view('front.categorias.index')->with('categorias', $categorias);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_categoria' => ['required', 'string', 'max:50', 'unique:categorias,nombre_categoria'],
            'poster' => ['required', 'mimes:jpeg,bmp,png,jpg']
        ]);

        $nombre_del_archivo = '';
        $ruta = $request->file("poster")->store("public/categoria_poster");
        $nombre_del_archivo=basename($ruta);
        $productoACrear["poster"] = $nombre_del_archivo;
        
        Categoria::create([
            'nombre_categoria' => $request['nombre_categoria'],
            'poster' => $nombre_del_archivo
        ]);
        return redirect()->route('categorias.index')->with("status", "La categoría ha sido agregada correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('front.categorias.index', compact("categoria"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre_categoria' => ['required', 'string', 'max:50'],
            'poster' => ['mimes:jpeg,bmp,png,jpg']
        ]);
        $categoria = Categoria::find($id);
        $categoria->nombre_categoria = $request['nombre_categoria'];
        
        if ($request->poster) {
            $nombre_del_archivo = '';
            Storage::delete('/storage/categoria_poster/' . $categoria->poster);
            $ruta = $request->file("poster")->store("public/categoria_poster");
            $nombre_del_archivo=basename($ruta);
            $categoria->poster = $nombre_del_archivo;
        }
        $categoria->save();
        return redirect()->route('categorias.index')->with("status", "La categoría ha sido agregada correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        foreach (Categoria::find($id)->productos as $producto){
            $producto->delete();
        }

        Categoria::find($id)->delete();
        return redirect()->route('categorias.index')->with('status', "La categoría ha sido eliminada correctamente");
    }
    
    // Middleware
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'destroy', 'edit', 'update');
        // $this->middleware('administrador')->only('index', 'create', 'store', 'destroy', 'edit', 'update');
        // $this->middleware(['administrador', 'password.confirm'])->only('destroy', 'edit');
    }
}
