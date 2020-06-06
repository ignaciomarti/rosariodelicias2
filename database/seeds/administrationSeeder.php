<?php

use Illuminate\Database\Seeder;

class administrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('page_administration')->insert([
            'main_title_1' => 'Lorem ipsum dolor sit',
            'main_subtitle_1' => 'Lorem ipsum dolor sit',
            'main_title_2' => 'Lorem ipsum dolor sit',
            'main_subtitle_2' => 'Lorem ipsum dolor sit',
            'main_title_3' => 'Lorem ipsum dolor sit',
            'main_subtitle_3' => 'Lorem ipsum dolor sit',
            'destacados_title' => 'Lorem ipsum dolor sit',
            'destacados_subtitle' => 'Lorem ipsum dolor sit',
            'testimonial' => 'Lorem ipsum dolor sit',
            'foto_fondo_testimonial' => 'Lorem ipsum dolor sit',
            'title_diferencia' => 'Lorem ipsum dolor sit',
            'subtitle_diferencia' => 'Lorem ipsum dolor sit',
            'title_first_card_diferencia' => 'Lorem ipsum dolor sit',
            'subtitle_first_card_diferencia' => 'Lorem ipsum dolor sit',
            'title_second_card_diferencia' => 'Lorem ipsum dolor sit',
            'subtitle_second_card_diferencia' => 'Lorem ipsum dolor sit',
            'title_third_card_diferencia' => 'Lorem ipsum dolor sit',
            'subtitle_third_card_diferencia' => 'Lorem ipsum dolor sit',
            'title_section_clasics' => 'Lorem ipsum dolor sit',
            'subtitle_section_clasics' => 'Lorem ipsum dolor sit',
            'foto_fondo_clasics' => 'Lorem ipsum dolor sit',
            'title_section_location' => 'Lorem ipsum dolor sit',
            'subtitle_section_location' => 'Lorem ipsum dolor sit',
            'formulario_contacto' => 'Lorem ipsum dolor sit',

            'title_nosotros' => 'Lorem ipsum dolor sit',
            'first_subtitle_nosotros' => 'Lorem ipsum dolor sit',
            'first_subtitle_first_text_nosotros' => 'Lorem ipsum dolor sit',
            'first_subtitle_second_text_nosotros' => 'Lorem ipsum dolor sit',
            'second_subtitle_nosotros' => 'Lorem ipsum dolor sit',
            'second_subtitle_first_text_nosotros' => 'Lorem ipsum dolor sit',
            'second_subtitle_second_text_nosotros' => 'Lorem ipsum dolor sit',
            'footer_paragraph_nosotros' => 'Lorem ipsum dolor sit',

            'cart_title' => 'Lorem ipsum dolor sit',
            'cart_subtitle' => 'Lorem ipsum dolor sit',
            'first_ask' => 'Lorem ipsum dolor sit',
            'first_answer' => 'Lorem ipsum dolor sit',
            'second_ask' => 'Lorem ipsum dolor sit',
            'second_answer' => 'Lorem ipsum dolor sit',
            'third_ask' => 'Lorem ipsum dolor sit',
            'third_answer' => 'Lorem ipsum dolor sit',
            'fourth_ask' => 'Lorem ipsum dolor sit',
            'fourth_answer' => 'Lorem ipsum dolor sit',
            'fifth_ask' => 'Lorem ipsum dolor sit',
            'fifth_answer' => 'Lorem ipsum dolor sit',
            'sixth_ask' => 'Lorem ipsum dolor sit',
            'sixth_answer' => 'Lorem ipsum dolor sit',
            'seventh_ask' => 'Lorem ipsum dolor sit',
            'seventh_answer' => 'Lorem ipsum dolor sit',
        ]);

    }
}
