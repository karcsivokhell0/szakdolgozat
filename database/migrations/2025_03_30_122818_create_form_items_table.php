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
        Schema::create('form_items', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('form_id');
            $table->integer('phoneNum');
            $table->string('text');//ebbe kerülne a problémája a felhasználónak 
            $table->string('email')->unique();
            //$table->foreignId('templates_id')->constrained()->default(0); ??? 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_items');
    }
};
