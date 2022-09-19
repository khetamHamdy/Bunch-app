<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_us', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->text('description');
            $table->string('email');
            $table->text('phoneNumber');
            $table->enum('projectType' , ['web' ,'android' , 'ios' ,'filter' , 'design']);
            $table->enum('groupType' , ['designer' , 'developers web' , 'developers ios' ,'developers android' ,'developers filter']);
            $table->text('socialMedia');
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
        Schema::dropIfExists('join_us');
    }
};
