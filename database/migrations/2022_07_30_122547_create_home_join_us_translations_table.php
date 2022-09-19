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
        Schema::create('home_join_us_translations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->longText('description');

            $table->string('locale')->index();
            $table->unique(['home_join_us_id', 'locale']);
            $table->foreignId('home_join_us_id')->unsigned()->constrained('home_join_us')->cascadeOnDelete();
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
        Schema::dropIfExists('home_join_us_translations');
    }
};
