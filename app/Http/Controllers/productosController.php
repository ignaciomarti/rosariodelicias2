<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
use App\Categoria;
use Auth;
use Illuminate\Support\Facades\Storage;
class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.create')->with('categorias', $categorias);
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
            'titulo' => ['required', 'string', 'max:50', 'unique:products,titulo'],
            'descripcion' => ['required', 'string', 'max:255'],
            'categoria_id' => ['required', 'numeric', 'min:1'],
            'es_destacado' => ['required', 'numeric', 'min:0', 'max:1'],
            'precio' => ['required', 'numeric', 'min:0'],
            'descuento' => ["nullable", "numeric","min:0","max:100"],
            'stock' => ['required', 'numeric', 'min:0'],
            'poster' => ['required', 'mimes:jpeg,bmp,png,jpg'],
            'poster2' => ['nullable', 'mimes:jpeg,bmp,png,jpg'],
            'poster3' => ['nullable', 'mimes:jpeg,bmp,png,jpg'],
            'poster4' => ['nullable', 'mimes:jpeg,bmp,png,jpg'],
            'poster5' => ['nullable', 'mimes:jpeg,bmp,png,jpg']
        ]);

        $productoACrear = [
            'titulo' => trim($request['titulo']),
            'descripcion' => trim($request['descripcion']),
            'categoria_id' => $request['categoria_id'],
            'es_destacado' => $request['es_destacado'],
            'precio' => trim($request['precio']),
            'descuento' => $request['descuento'],
        ];

        $nombre_del_archivo_1 = '';
        if(isset($request['poster'])){
        $ruta = $request->file("poster")->store("public/product_poster");
        $nombre_del_archivo_1=basename($ruta);
        $productoACrear["poster"] = $nombre_del_archivo_1;
        }
        $nombre_del_archivo_2 = '';
        if(isset($request['poster2'])){
        $ruta = $request->file("poster2")->store("public/product_poster");
        $nombre_del_archivo_2=basename($ruta);
        $productoACrear["poster2"] = $nombre_del_archivo_2;
        }
        $nombre_del_archivo_3 = '';
        if(isset($request['poster3'])){
        $ruta = $request->file("poster3")->store("public/product_poster");
        $nombre_del_archivo_3=basename($ruta);
        $productoACrear["poster3"] = $nombre_del_archivo_3;
        }
        $nombre_del_archivo_4 = '';
        if(isset($request['poster4'])){
        $ruta = $request->file("poster4")->store("public/product_poster");
        $nombre_del_archivo_4=basename($ruta);
        $productoACrear["poster4"] = $nombre_del_archivo_4;
        }
        $nombre_del_archivo_5 = '';
        if(isset($request['poster5'])){
        $ruta = $request->file("poster5")->store("public/product_poster");
        $nombre_del_archivo_5=basename($ruta);
        $productoACrear["poster5"] = $nombre_del_archivo_5;
        }
        Producto::create($productoACrear);
        return redirect()->route('productos.index')->with("status", "El producto ha sido creado.");
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $vac = compact('id', 'producto', 'categorias');
        if (Auth::user()!= null && Auth::user()->tipo_de_usuario === 2) {
            return view("admin.productos.show", $vac);
        } else {
            return view("front.productos.index", $vac);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $producto = Producto::find($id);
        return view('admin.productos.edit')->with([
            'producto' => $producto,
            'categorias' => $categorias
        ]);
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
        $producto = Producto::find($id);
        $this->validate($request, [

        ]);

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->es_destacado = $request->es_destacado;
        $producto->precio = $request->precio;
        $producto->descuento = $request->descuento;
        if($request->poster){
            $nombre_del_archivo_1 = '';
            if($producto->poster){
                Storage::delete('/storage/product_poster/' . $producto->poster);
            }
            $ruta = $request->file("poster")->store("public/product_poster");
            $nombre_del_archivo_1=basename($ruta);
            $producto->poster = $nombre_del_archivo_1;
        }
        if($request->poster2){
            $nombre_del_archivo_2 = '';
            if($producto->poster2){
                Storage::delete('/storage/product_poster/' . $producto->poster2);
            }
            $ruta = $request->file("poster2")->store("public/product_poster");
            $nombre_del_archivo_2=basename($ruta);
            $producto->poster2 = $nombre_del_archivo_2;
        }
        if($request->poster3){
            $nombre_del_archivo_3 = '';
            if($producto->poster3){
                Storage::delete('/storage/product_poster/' . $producto->poster3);
            }
            $ruta = $request->file("poster3")->store("public/product_poster");
            $nombre_del_archivo_3=basename($ruta);
            $producto->poster3 = $nombre_del_archivo_3;
        }
        if($request->poster4){
            $nombre_del_archivo_4 = '';
            if($producto->poster4){
                Storage::delete('/storage/product_poster/' . $producto->poster4);
            }
            $ruta = $request->file("poster4")->store("public/product_poster");
            $nombre_del_archivo_4=basename($ruta);
            $producto->poster4 = $nombre_del_archivo_4;
        }
        if($request->poster5){
            $nombre_del_archivo_5 = '';
            if($producto->poster5){
                Storage::delete('/storage/product_poster/' . $producto->poster5);
            }
            $ruta = $request->file("poster5")->store("public/product_poster");
            $nombre_del_archivo_5=basename($ruta);
            $producto->poster5 = $nombre_del_archivo_5;
        }

        $producto->save();
        return redirect()->route('productos.index')->with('status', 'El producto se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if($producto->poster){
            Storage::delete('public/product_poster/'.$producto->poster);
        }
        if($producto->poster2){
            Storage::delete('public/product_poster/'.$producto->poster2);
        }
        if($producto->poster3){
            Storage::delete('public/product_poster/'.$producto->poster3);
        }
        if($producto->poster4){
            Storage::delete('public/product_poster/'.$producto->poster4);
        }
        if($producto->poster5){
            Storage::delete('public/product_poster/'.$producto->poster5);
        }
        // if($producto->item){
        //     foreach ($producto->item as $carrito) {
        //         $carrito->delete();
        //     }
        // }
        $producto->delete();
        return redirect()->route('productos.index')->with("status", "El producto ha sido eliminado.");

    }
}
