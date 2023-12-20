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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->string('question', 100);
            $table->string('je', 50);
            $table->string('tu', 50);
            $table->string('il/elle', 50);
            $table->string('nous', 50);
            $table->string('vous', 50);
            $table->string('ils/elles', 50);
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
        Schema::dropIfExists('questions');
    }
};
