<?php

namespace App\Http\Controllers;
use App\pageAdministration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if ($request->id_form == "home") {
            $datosAModificar->main_title_1 = $request->main_title_1;
            $datosAModificar->main_subtitle_1 = $request->main_subtitle_1;
            $datosAModificar->main_title_2 = $request->main_title_2;
            $datosAModificar->main_subtitle_2 = $request->main_subtitle_2;
            $datosAModificar->main_title_3 = $request->main_title_3;
            $datosAModificar->main_subtitle_3 = $request->main_subtitle_3;
            $datosAModificar->destacados_title = $request->destacados_title;
            $datosAModificar->destacados_subtitle = $request->destacados_subtitle;
            $datosAModificar->testimonial = $request->testimonial;
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

            if ($request->foto_slider_1) {
                if($datosAModificar->foto_slider_1){
                    Storage::delete('/storage/img-front/' . $datosAModificar->foto_slider_1);
                }
                $ruta = $request->file("foto_slider_1")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->foto_slider_1 = $nombre_del_archivo;
            }

            if ($request->foto_slider_2) {
                if($datosAModificar->foto_slider_2){
                    Storage::delete('/storage/img-front/' . $datosAModificar->foto_slider_2);
                }
                $ruta = $request->file("foto_slider_2")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->foto_slider_2 = $nombre_del_archivo;
            }

            if ($request->foto_slider_3) {
                if($datosAModificar->foto_slider_3){
                    Storage::delete('/storage/img-front/' . $datosAModificar->foto_slider_3);
                }
                $ruta = $request->file("foto_slider_3")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->foto_slider_3 = $nombre_del_archivo;
            }

            if ($request->foto_testimonial) {
                if($datosAModificar->foto_testimonial){
                    Storage::delete('/storage/img-front/' . $datosAModificar->foto_testimonial);
                }
                $ruta = $request->file("foto_testimonial")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->foto_testimonial = $nombre_del_archivo;
            }
        } elseif ($request->id_form == "nosotros") {
            $datosAModificar->title_nosotros = $request->title_nosotros;
            $datosAModificar->first_subtitle_nosotros = $request->first_subtitle_nosotros;
            $datosAModificar->first_subtitle_first_text_nosotros = $request->first_subtitle_first_text_nosotros;
            $datosAModificar->first_subtitle_second_text_nosotros = $request->first_subtitle_second_text_nosotros;
            $datosAModificar->second_subtitle_nosotros = $request->second_subtitle_nosotros;
            $datosAModificar->second_subtitle_first_text_nosotros = $request->second_subtitle_first_text_nosotros;
            $datosAModificar->second_subtitle_second_text_nosotros = $request->second_subtitle_second_text_nosotros;
            $datosAModificar->footer_paragraph_nosotros = $request->footer_paragraph_nosotros;

            if ($request->first_foto_nosotros) {
                if($datosAModificar->first_foto_nosotros){
                    Storage::delete('/storage/img-front/' . $datosAModificar->first_foto_nosotros);
                }
                $ruta = $request->file("first_foto_nosotros")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->first_foto_nosotros = $nombre_del_archivo;
            }

            if ($request->second_foto_nosotros) {
                if($datosAModificar->second_foto_nosotros){
                    Storage::delete('/storage/img-front/' . $datosAModificar->second_foto_nosotros);
                }
                $ruta = $request->file("second_foto_nosotros")->store("public/img-front");
                $nombre_del_archivo=basename($ruta);
                $datosAModificar->second_foto_nosotros = $nombre_del_archivo;
            }
        } else {
            $datosAModificar->cart_title = $request->cart_title;
            $datosAModificar->cart_subtitle = $request->cart_subtitle;
            $datosAModificar->first_ask = $request->first_ask;
            $datosAModificar->first_answer = $request->first_answer;
            $datosAModificar->second_ask = $request->second_ask;
            $datosAModificar->second_answer = $request->second_answer;
            $datosAModificar->third_ask = $request->third_ask;
            $datosAModificar->third_answer = $request->third_answer;
            $datosAModificar->fourth_ask = $request->fourth_ask;
            $datosAModificar->fourth_answer = $request->fourth_answer;
            $datosAModificar->fifth_ask = $request->fifth_ask;
            $datosAModificar->fifth_answer = $request->fifth_answer;
            $datosAModificar->sixth_ask = $request->sixth_ask;
            $datosAModificar->sixth_answer = $request->sixth_answer;
            $datosAModificar->seventh_ask = $request->seventh_ask;
            $datosAModificar->seventh_answer = $request->seventh_answer;
        }

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
