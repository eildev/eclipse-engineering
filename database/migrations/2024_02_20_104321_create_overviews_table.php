<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('overviews', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->integer("experience")->nullable();
            $table->string("icon")->nullable();
            $table->string("icon_name")->nullable();
            $table->tinyInteger("status")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overviews');
    }
};
