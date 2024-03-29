<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->bigInteger('bus_id');
            $table->bigInteger('operator_id');
            $table->bigInteger('region_id');
            $table->bigInteger('sub_region_id');
            $table->date('depart_date');
            $table->date('return_date');
            $table->time('depart_time');
            $table->time('return_time');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('bus_schedules');
    }
}
