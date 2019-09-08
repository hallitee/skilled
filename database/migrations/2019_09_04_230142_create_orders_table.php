<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('profile_id');
			$table->uuid('orderid');
			$table->unsignedBigInteger('paymentid')->nullable();
			$table->string('trackNo')->nullable();
			$table->string('orderStatus')->nullable();
			$table->string('acpDate')->nullable();
			$table->string('completedDate')->nullable();
			$table->string('payStatus')->nullable();
			$table->string('payDate')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
