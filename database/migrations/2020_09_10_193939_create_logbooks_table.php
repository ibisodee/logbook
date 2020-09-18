<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbooks', function (Blueprint $table) {
            $table->id();

            $table->string('category');
            $table->string('model')->nullable();
            $table->string('date_recorded')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('working_pressure')->nullable();
            $table->string('working_flow')->nullable();
            $table->string('max_pressure')->nullable();
            $table->string('pressure_testing_date')->nullable();
            $table->string('first_issue_date')->nullable();
            $table->string('unit_type')->nullable();
            $table->string('current_configuration')->nullable();
            $table->string('inspection_date')->nullable();
            $table->string('inspection_comments')->nullable();
            $table->string('assested_visual')->nullable();
            $table->string('inspection_by')->nullable();
            $table->string('maintenance_carried')->nullable();
            $table->string('maintenance_completed_date')->nullable();
            $table->string('current_location')->nullable();
            $table->string('location_date')->nullable();
            
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
        Schema::dropIfExists('logbooks');
    }
}
