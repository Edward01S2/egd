<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_num');
            $table->date('visit_date')->nullable();
            $table->integer('acct_num')->nullable();
            $table->time('arrive_time')->nullable();
            $table->string('serv_tech')->nullable();
            $table->time('depart_time')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->text('svc_reason')->nullable();
            $table->text('corr_action')->nullable();
            $table->text('rec_prev')->nullable();
            $table->text('other_comm')->nullable();
            $table->json('zone')->nullable();
            $table->integer('vegetation');
            $table->string('batt_num')->nullable();
            $table->string('solar_num')->nullable();
            $table->integer('site_arm')->nullable();
            $table->integer('sign60');
            $table->integer('batt_charge')->nullable();
            $table->json('sizone')->nullable();
            $table->json('siener')->nullable();
            $table->string('break_gap')->nullable();
            $table->string('volt_off')->nullable();
            $table->json('stz')->nullable();
            $table->json('stv')->nullable();
            $table->json('cv')->nullable();
            $table->json('va')->nullable();
            $table->json('aa')->nullable();
            $table->json('ao')->nullable();
            $table->json('fo')->nullable();
            $table->json('fv')->nullable();
            $table->json('alo')->nullable();
            $table->json('al')->nullable();
            $table->integer('dvm')->nullable();
            $table->integer('wire_tight')->nullable();
            $table->integer('wire_hot')->nullable();
            $table->integer('feed_start')->nullable();
            $table->time('alarm_time')->nullable();
            $table->time('online_time')->nullable();
            $table->integer('armed_arr')->nullable();
            $table->integer('armed_dep')->nullable();
            $table->integer('fence_arr')->nullable();
            $table->integer('fence_dep')->nullable();
            $table->string('stname')->nullable();
            $table->integer('service_qual');
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
        Schema::dropIfExists('tickets');
    }
}
