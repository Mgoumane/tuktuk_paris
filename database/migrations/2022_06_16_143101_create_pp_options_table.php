
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_option', function (Blueprint $table) {

            $table->foreignId('option_id')->constrained('options', 'id')->onDelete('cascade');
            $table->foreignId('point_passage_id')->constrained('point_passages', 'id')->onDelete('cascade');
            $table->primary(["option_id", "point_passage_id"]);
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
        Schema::dropIfExists('pp_option');
    }
}
