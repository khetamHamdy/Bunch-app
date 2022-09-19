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
        Schema::create('basic_information_for_site_translations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('locale')->index();
            $table->unique(['basic_information_for_site_id', 'locale']);
            $table->foreignId('basic_information_for_site_id')->unsigned()->constrained('basic_information_for_sites')->cascadeOnDelete();
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
        Schema::dropIfExists('basic_information_for_site_translations');
    }
};
