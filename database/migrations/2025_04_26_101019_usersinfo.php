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
        //

        Schema::create('users_info', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('intro_text');
            $table->string('image')->nullable();
            $table->string('about');
            $table->string('phone');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
