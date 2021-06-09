<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('age');
            $table->string('class', 3)->nullable();
            $table->text('address');
            $table->enum('gender',['L','P']);
            $table->enum('religion',['Islam','Kristen','Katolik','Budha','Hindu','Atheis'])->default('Atheis');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('students');
    }
}
