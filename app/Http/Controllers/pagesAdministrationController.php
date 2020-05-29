<?php

namespace App\Http\Controllers;
use App\pageAdministration;
use Illuminate\Http\Request;

class pagesAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = pageAdministration::all();
        $datos = $collection[0];
        return view('admin.pageAdministration', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $datosAModificar = pageAdministration::find($id);
        $datosAModificar->main_title_1 = $request->main_title_1;
        $datosAModificar->main_subtitle_1 = $request->main_subtitle_1;
        $datosAModificar->foto_slider_1 = $request->foto_slider_1;
        $datosAModificar->main_title_2 = $request->main_title_2;
        $datosAModificar->main_subtitle_2 = $request->main_subtitle_2;
        $datosAModificar->foto_slider_2 = $request->foto_slider_2;
        $datosAModificar->main_title_3 = $request->main_title_3;
        $datosAModificar->main_subtitle_3 = $request->main_subtitle_3;
        $datosAModificar->foto_slider_3 = $request->foto_slider_3;
        $datosAModificar->destacados_title = $request->destacados_title;
        $datosAModificar->destacados_subtitle = $request->destacados_subtitle;
        $datosAModificar->testimonial = $request->testimonial;
        $datosAModificar->foto_testimonial = $request->foto_testimonial;
        $datosAModificar->foto_fondo_testimonial = $request->foto_fondo_testimonial;
        $datosAModificar->title_diferencia = $request->title_diferencia;
        $datosAModificar->subtitle_diferencia = $request->subtitle_diferencia;
        $datosAModificar->title_first_card_diferencia = $request->title_first_card_diferencia;
        $datosAModificar->subtitle_first_card_diferencia = $request->subtitle_first_card_diferencia;
        $datosAModificar->title_second_card_diferencia = $request->title_second_card_diferencia;
        $datosAModificar->subtitle_second_card_diferencia = $request->subtitle_second_card_diferencia;
        $datosAModificar->title_third_card_diferencia = $request->title_third_card_diferencia;
        $datosAModificar->subtitle_third_card_diferencia = $request->subtitle_third_card_diferencia;
        $datosAModificar->title_section_clasics = $request->title_section_clasics;
        $datosAModificar->subtitle_section_clasics = $request->subtitle_section_clasics;
        $datosAModificar->foto_fondo_clasics = $request->foto_fondo_clasics;
        $datosAModificar->title_section_location = $request->title_section_location;
        $datosAModificar->subtitle_section_location = $request->subtitle_section_location;
        $datosAModificar->formulario_contacto = $request->formulario_contacto;

        $datosAModificar->save();
        return redirect()->route('administration.index')->with('status', 'Los datos se actualizaron correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
