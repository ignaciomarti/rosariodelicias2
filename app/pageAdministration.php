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
            'formulario_contacto'
    ];
}
