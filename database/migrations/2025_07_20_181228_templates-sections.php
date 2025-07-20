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
        Schema::create('templates_sections', function(Blueprint $table){
            $table->id();
            $table->string('template_id');
            $table->string('template_name');
            $table->integer('Intro');
            $table->integer('About');
            $table->integer('Skills');
            $table->integer('Projects');
            $table->integer('Education_form');
            $table->integer('Posts');
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
