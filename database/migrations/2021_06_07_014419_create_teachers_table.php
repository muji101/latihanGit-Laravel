<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->text('address');
            $table->enum('gender',['L','P']);
            $table->enum('religion',['Islam','Kristen','Katolik','Budha','Hindu','Atheis'])->default('Atheis');
            $table->string('phone');
            $table->string('email');
            $table->date('birth_date');
            $table->text('description');
            $table->text('image');
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
        Schema::dropIfExists('teachers');
    }
}
