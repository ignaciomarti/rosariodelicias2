<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAdministrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_administration', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('main_title_1')->nullable();
            $table->text('main_subtitle_1')->nullable();
            $table->text('foto_slider_1')->nullable();
            $table->text('main_title_2')->nullable();
            $table->text('main_subtitle_2')->nullable();
            $table->text('foto_slider_2')->nullable();
            $table->text('main_title_3')->nullable();
            $table->text('main_subtitle_3')->nullable();
            $table->text('foto_slider_3')->nullable();
            $table->text('destacados_title')->nullable();
            $table->text('destacados_subtitle')->nullable();
            $table->text('testimonial')->nullable();
            $table->text('foto_testimonial')->nullable();
            $table->text('foto_fondo_testimonial')->nullable();
            $table->text('title_diferencia')->nullable();
            $table->text('subtitle_diferencia')->nullable();
            $table->text('title_first_card_diferencia')->nullable();
            $table->text('subtitle_first_card_diferencia')->nullable();
            $table->text('title_second_card_diferencia')->nullable();
            $table->text('subtitle_second_card_diferencia')->nullable();
            $table->text('title_third_card_diferencia')->nullable();
            $table->text('subtitle_third_card_diferencia')->nullable();
            $table->text('title_section_clasics')->nullable();
            $table->text('subtitle_section_clasics')->nullable();
            $table->text('foto_fondo_clasics')->nullable();
            $table->text('title_section_location')->nullable();
            $table->text('subtitle_section_location')->nullable();
            $table->text('formulario_contacto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_administration');
    }
}
