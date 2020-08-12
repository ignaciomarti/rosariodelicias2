<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPricePerSixToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price_per_three')->nullable();
            $table->integer('price_per_six')->nullable();
            $table->integer('price_per_twelve')->nullable();
            $table->integer('price_per_twentyfour')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        if (Schema::hasColumn('products', 'price_per_three'))

        {

            Schema::table('products', function (Blueprint $table)

            {

                $table->dropColumn('price_per_three');

            });

        }
        if (Schema::hasColumn('products', 'price_per_six'))

        {

            Schema::table('products', function (Blueprint $table)

            {

                $table->dropColumn('price_per_six');

            });

        }
        if (Schema::hasColumn('products', 'price_per_twelve'))

        {

            Schema::table('products', function (Blueprint $table)

            {

                $table->dropColumn('price_per_twelve');

            });

        }
        if (Schema::hasColumn('products', 'price_per_twentyfour'))

        {

            Schema::table('products', function (Blueprint $table)

            {

                $table->dropColumn('price_per_twentyfour');

            });

        }
    }
}
