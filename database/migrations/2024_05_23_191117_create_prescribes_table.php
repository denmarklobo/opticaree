<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribes', function (Blueprint $table) {
            $table->id('prescribes_id');
            $table->foreignId('patient_id')->constrained('patients', 'patient_id')->onDelete('cascade');
            $table->string('lefts')->nullable();
            $table->string('rights')->nullable();
            $table->string('leftc')->nullable();
            $table->string('rightc')->nullable();
            $table->string('lefta')->nullable();
            $table->string('righta')->nullable();
            $table->string('pd')->nullable();
            $table->string('reading_add')->nullable();
            $table->string('visual_acuity')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('prescribes');
    }
}