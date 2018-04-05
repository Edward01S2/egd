<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_num');
            $table->date('visit_date')->nullable();
            $table->string('acct_num')->nullable();
            $table->time('arrive_time')->nullable();
            $table->string('serv_tech')->nullable();
            $table->time('depart_time')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('expo_name')->nullable();
            $table->string('expo_phone')->nullable();
            $table->date('expo_date')->nullable();
            $table->time('expo_time')->nullable();
            $table->integer('med_att')->nullable();
            $table->integer('workman')->nullable();
            $table->text('desc_expo')->nullable();
            $table->text('wit_info')->nullable();
            $table->text('cond')->nullable();
            $table->text('assess')->nullable();
            $table->text('add_comm')->nullable();
            $table->integer('fence_depart')->nullable();
            $table->string('tt');
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
        Schema::dropIfExists('expo');
    }
}
