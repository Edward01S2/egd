<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntrusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('intrusions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_num');
            $table->date('visit_date')->nullable();
            $table->string('acct_num')->nullable();
            $table->time('arrive_time')->nullable();
            $table->string('serv_tech');
            $table->time('depart_time')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('zone1')->nullable();
            $table->string('zone2')->nullable();
            $table->string('zone3')->nullable();
            $table->string('zone4')->nullable();
            $table->string('zone5')->nullable();
            $table->string('zone6')->nullable();
            $table->string('zone7')->nullable();
            $table->string('zone8')->nullable();
            $table->string('zone9')->nullable();
            $table->string('zone10')->nullable();
            $table->string('zone11')->nullable();
            $table->string('zone12')->nullable();
            $table->string('system_type')->nullable();
            $table->string('key_num')->nullable();
            $table->string('part_num')->nullable();
            $table->string('batt_volt')->nullable();
            $table->string('gsm')->nullable();
            $table->integer('ac_power')->nullable();
            $table->integer('user_code')->nullable();
            $table->text('equip')->nullable();
            $table->string('rep_name')->nullable();
            $table->time('alarm_time')->nullable();
            $table->time('online_time')->nullable();
            $table->text('svc_reason')->nullable();
            $table->text('solution')->nullable();
            $table->string('stname')->nullable();
            $table->integer('service_qual')->nullable();
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
        //
        Schema::dropIfExists('intrusions');
    }
}
