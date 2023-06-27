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
        Schema::table('projects', function (Blueprint $table) {
            // CREO LA COLONNA DELLA  FK
          $table->unsignedBigInteger("type_id")->nullable()->after("id");
          // ASSEGNO FK
          $table->foreign("type_id")
              ->references("id")
              ->on("types")
              // SE VIENE ELIMINATA UNA CATEGORIA I PROGETTI IN RELAZIONE NON VENGONO PERSI E AVRANNO TYPE_ID=NULL
              ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            // ELIMINO FK
            $table->dropForeign(["type_id"]);
            // ELIMINO COLONNA
            $table->dropColumn("type_id");
        });
    }
};
