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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ministry_id")->constrained()->cascadeOnDelete()->cascadeOnDelete();
            $table->foreignId("committee_id")->constrained()->cascadeOnDelete()->cascadeOnDelete();
            $table->string("title");
            $table->text("preview");
            $table->text("description");
            $table->text("thumbnail")->nullable();
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
        Schema::dropIfExists('departments');
    }
};
