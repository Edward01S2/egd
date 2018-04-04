<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pst', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_num');
            $table->date('date')->nullable();
            $table->integer('acct_num')->nullable();
            $table->string('tech')->nullable();;
            $table->string('installer')->nullable();;
            $table->string('cust_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('check_type');
            $table->json('check')->nullable();
            $table->text('quest1')->nullable();
            $table->text('quest2')->nullable();
            $table->text('quest3')->nullable();
            $table->text('quest4')->nullable();
            $table->text('quest5')->nullable();
            $table->text('quest6')->nullable();
            $table->text('quest7')->nullable();
            $table->text('quest8')->nullable();
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
        Schema::dropIfExists('pst');
    }
}
