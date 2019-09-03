<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill__profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('profile_id');
			$table->unsignedBigInteger('skill_id');
			$table->string('rate')->nullable();
			$table->string('daily')->nullable();
			$table->string('weekly')->nullable();
			$table->string('monthly')->nullable();
			$table->string('yearly')->nullable();
			$table->string('dayComplete')->nullable();
			$table->string('prev')->nullable();
			$table->text('curr')->nullable();
			$table->string('status')->nullable();
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
        Schema::dropIfExists('skill__profiles');
    }
}
