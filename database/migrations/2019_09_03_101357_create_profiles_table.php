<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->string('fname')->nullable();
			$table->string('lname')->nullable();
			$table->string('dob')->nullable();
			$table->string('marStatus')->nullable();
			$table->string('eduStat')->nullable();
			$table->string('experience')->nullable();
			$table->string('expYears')->nullable();
			$table->string('pic')->nullable();
			$table->string('status')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('email')->nullable();
			$table->string('upload')->nullable();
			$table->string('upload1')->nullable();
			$table->string('upload2')->nullable();
			$table->string('upload3')->nullable();
			$table->string('verStatus')->nullable();
			$table->string('proRank')->nullable();
			$table->string('proUpdate')->nullable();
			$table->string('proExpiry')->nullable();
			$table->string('subStatus')->nullable();
			$table->text('description')->nullable();
			$table->text('proComment')->nullable();
            $table->timestamps();			
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
