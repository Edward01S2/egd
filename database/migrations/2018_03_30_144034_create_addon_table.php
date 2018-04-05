<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addon', function (Blueprint $table) {
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
            $table->string('foot_up')->nullable();
            $table->string('single_up')->nullable();
            $table->string('dbl_up')->nullable();
            $table->string('gates')->nullable();
            $table->string('elec_add')->nullable();
            $table->string('foot_down')->nullable();
            $table->string('single_down')->nullable();
            $table->string('dbl_down')->nullable();
            $table->string('gate_down')->nullable();
            $table->string('elec_move')->nullable();
            $table->string('trench_foot')->nullable();
            $table->string('pvc_foot')->nullable();
            $table->string('saw_foot')->nullable();
            $table->string('total_man')->nullable();
            $table->text('comments')->nullable();
            $table->text('check1')->nullable();
            $table->text('check2')->nullable();
            $table->text('check3')->nullable();
            $table->text('check4')->nullable();
            $table->text('check5')->nullable();
            $table->text('check6')->nullable();
            $table->text('check7')->nullable();
            $table->text('check8')->nullable();
            $table->text('check9')->nullable();
            $table->text('check10')->nullable();
            $table->text('check11')->nullable();
            $table->text('check12')->nullable();
            $table->text('check13')->nullable();
            $table->text('check14')->nullable();
            $table->text('check15')->nullable();
            $table->text('check16')->nullable();
            $table->text('check17')->nullable();
            $table->text('check18')->nullable();
            $table->text('check19')->nullable();
            $table->text('addon1')->nullable();
            $table->text('addon2')->nullable();
            $table->text('addon3')->nullable();
            $table->text('addon4')->nullable();
            $table->text('addon5')->nullable();
            $table->text('addon6')->nullable();
            $table->text('addon7')->nullable();
            $table->text('addon8')->nullable();
            $table->text('addon9')->nullable();
            $table->text('addon10')->nullable();
            $table->text('addon11')->nullable();
            $table->string('stname')->nullable();
            $table->string('customer')->nullable();
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
        Schema::dropIfExists('addon');
    }
}
