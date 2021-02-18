<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays_completed', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('level_pay');
            $table->string('name');
            $table->float('total_pay', 9, 5);
            $table->string('status_pay')->default('Pagado');
            $table->integer('range_id');
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
        Schema::dropIfExists('pays_completed');
    }
}
