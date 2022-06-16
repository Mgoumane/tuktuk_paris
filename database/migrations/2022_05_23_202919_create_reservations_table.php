<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('dateDepart');
            $table->string('heureDepart');
            $table->string('numTel');
            $table->string('pointDepart');
            $table->timestamps('');
            $table->foreignId('option_id')->constrained('options','id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
