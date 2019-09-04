<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank__details', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('profile_id');
			$table->string('name')->nullable();
			$table->string('bankName')->nullable();
			$table->string('acctType')->nullable();
			$table->string('acctNum')->nullable();
			$table->string('default')->nullable();
			$table->string('status')->nullable();
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
        Schema::dropIfExists('bank__details');
    }
}
