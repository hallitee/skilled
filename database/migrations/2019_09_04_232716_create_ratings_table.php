<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('order_id');
			$table->string('profileid')->nullable();
			$table->string('rated')->nullable();
			$table->string('no_rated')->nullable();
			$table->string('ratings')->nullable();
			$table->string('factor')->nullable();
			$table->string('status')->nullable();
			$table->text('remarks')->nullable();
			$table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('ratings');
    }
}
