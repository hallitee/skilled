<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('profile_id');$table->unsignedBigInteger('order_id')->nullable();
			$table->string('payType')->nullable();
			$table->string('payDate')->nullable();
			$table->string('payStatus')->nullable();
			$table->string('orderName')->nullable();
			$table->string('ordered')->nullable();
			$table->string('qty')->nullable();
			$table->string('status')->nullable();
			$table->text('remarks')->nullable();
			$table->foreign('profile_id')->references('id')->on('profiles');
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
        Schema::dropIfExists('payments');
    }
}
