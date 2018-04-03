<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_num');
            $table->string('serv_tech')->nullable();
            $table->date('visit_date')->nullable();
            $table->time('arrive_time')->nullable();
            $table->time('depart_time')->nullable();
            $table->string('total_time')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('cont_name')->nullable();
            $table->date('cont_date')->nullable();
            $table->time('cont_time')->nullable();
            $table->string('site_date')->nullable();
            $table->text('site_info')->nullable();
            $table->string('footage')->nullable();
            $table->string('gate_panels')->nullable();
            $table->string('num_elec')->nullable();
            $table->string('outdoor')->nullable();
            $table->string('num_sing')->nullable();
            $table->string('num_dbl')->nullable();
            $table->string('fiberglass')->nullable();
            $table->string('roof_fence')->nullable();
            $table->integer('pl1')->nullable();
            $table->integer('pl2')->nullable();
            $table->integer('pl3')->nullable();
            $table->integer('pl4')->nullable();
            $table->integer('pl5')->nullable();
            $table->integer('pl6')->nullable();
            $table->integer('pl7')->nullable();
            $table->string('pli1')->nullable();
            $table->string('pli2')->nullable();
            $table->string('pli3')->nullable();
            $table->string('pli4')->nullable();
            $table->string('pli5')->nullable();
            $table->string('pli6')->nullable();
            $table->string('pli7')->nullable();
            $table->string('inst1')->nullable();
            $table->string('inst2')->nullable();
            $table->string('inst3')->nullable();
            $table->string('inst4')->nullable();
            $table->string('add1')->nullable();
            $table->string('add2')->nullable();
            $table->string('add3')->nullable();
            $table->string('add4')->nullable();
            $table->string('add5')->nullable();
            $table->string('add6')->nullable();
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
        Schema::dropIfExists('ist');
    }
}
