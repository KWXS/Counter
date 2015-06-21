<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKryptonit3CounterPageVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kryptonit3_counter_page_visitor', function (Blueprint $table) {
            $table->bigInteger('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('kryptonit3_counter_page')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('visitor_id')->unsigned();
            $table->foreign('visitor_id')->references('id')->on('kryptonit3_counter_visitor')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('kryptonit3_counter_page_visitor');
    }
}