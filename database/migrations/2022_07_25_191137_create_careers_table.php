<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('Nationality');
            $table->text('description');
            $table->string('email');
            $table->text('mobileNumber');
            $table->bigInteger('Age');
            $table->enum('specialization',
                ['ios', 'assets end developer', 'front end developer', 'full stack developer', 'filter', 'android',
                    'design']);

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
        Schema::dropIfExists('careers');
    }
};
