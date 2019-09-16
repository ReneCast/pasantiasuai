<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvalTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evalTutor', function (Blueprint $table) {
            $table->bigIncrements('idEvalTutor');
						$table->unsignedInteger('idProyecto');
            $table->unsignedInteger('compromiso')->default(0);
            $table->unsignedInteger('adaptabilidad')->default(0);
            $table->unsignedInteger('comunicacion')->default(0);
            $table->unsignedInteger('equipo')->default(0);
            $table->unsignedInteger('liderazgo')->default(0);
            $table->unsignedInteger('sobreponerse')->default(0);
            $table->unsignedInteger('habilidades')->default(0);
            $table->unsignedInteger('proactividad')->default(0);
            $table->unsignedInteger('innovacion')->default(0);
            $table->unsignedInteger('etica')->default(0);
            $table->float('promedio')->default(0);
            $table->string('comentarios')->nullable();
            $table->unsignedTinyInteger('certificadoTutor')->default(0);
						$table->timestamps();
            $table->unique("idEncuesta");
						$table->index("idPasantia");
						$table->foreign("idPasantia")->references("idProyecto")->on("proyecto");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eval_tutor');
    }
}
