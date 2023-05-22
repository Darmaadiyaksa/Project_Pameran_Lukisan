<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->integer('rate_id');
            $table->integer('package_id');
            $table->string('rate_name', 45);
            $table->date('date_from');
            $table->date('date_end');
            $table->integer('qty_per_day');
            $table->decimal('adult_rate', $precision = 10, $scale = 0);
            $table->decimal('child_rate', $precision = 10, $scale = 0);
            $table->decimal('infant_rate', $precision = 10, $scale = 0);
            $table->decimal('foreign_adult_rate', $precision = 10, $scale = 0);
            $table->decimal('foreign_child_rate', $precision = 10, $scale = 0);
            $table->decimal('foreign_infant_rate', $precision = 10, $scale = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate');
    }
};
