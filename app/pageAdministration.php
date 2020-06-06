<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pageAdministration extends Model
{
    public $table = 'page_administration';
    public $guarded = [];

    public $fillable = [
            'main_title_1',
            'main_subtitle_1',
            'foto_slider_1',
            'main_title_2',
            'main_subtitle_2',
            'foto_slider_2',
            'main_title_3',
            'main_subtitle_3',
            'foto_slider_3',
            'destacados_title',
            'destacados_subtitle',
            'testimonial',
            'foto_testimonial',
            'foto_fondo_testimonial',
            'title_diferencia',
            'subtitle_diferencia',
            'title_first_card_diferencia',
            'subtitle_first_card_diferencia',
            'title_second_card_diferencia',
            'subtitle_second_card_diferencia',
            'title_third_card_diferencia',
            'subtitle_third_card_diferencia',
            'title_section_clasics',
            'subtitle_section_clasics',
            'foto_fondo_clasics',
            'title_section_location',
            'subtitle_section_location',
            'formulario_contacto',
            'title_nosotros',
            'first_subtitle_nosotros',
            'first_foto_nosotros',
            'first_subtitle_first_text_nosotros',
            'first_subtitle_second_text_nosotros',
            'second_subtitle_nosotros',
            'second_foto_nosotros',
            'second_subtitle_first_text_nosotros',
            'second_subtitle_second_text_nosotros',
            'footer_paragraph_nosotros',
            'cart_title',
            'cart_subtitle',
            'first_ask',
            'first_answer',
            'second_ask',
            'second_answer',
            'third_ask',
            'third_answer',
            'fourth_ask',
            'fourth_answer',
            'fifth_ask',
            'fifth_answer',
            'sixth_ask',
            'sixth_answer',
            'seventh_ask',
            'seventh_answer'
    ];
}

