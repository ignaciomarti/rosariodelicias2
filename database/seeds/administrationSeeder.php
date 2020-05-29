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
            'foto_slider_1' => 'Lorem ipsum dolor sit',
            'main_title_2' => 'Lorem ipsum dolor sit',
            'main_subtitle_2' => 'Lorem ipsum dolor sit',
            'foto_slider_2' => 'Lorem ipsum dolor sit',
            'main_title_3' => 'Lorem ipsum dolor sit',
            'main_subtitle_3' => 'Lorem ipsum dolor sit',
            'foto_slider_3' => 'Lorem ipsum dolor sit',
            'destacados_title' => 'Lorem ipsum dolor sit',
            'destacados_subtitle' => 'Lorem ipsum dolor sit',
            'testimonial' => 'Lorem ipsum dolor sit',
            'foto_testimonial' => 'Lorem ipsum dolor sit',
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
            'formulario_contacto' => 'Lorem ipsum dolor sit'
        ]);

    }
}
