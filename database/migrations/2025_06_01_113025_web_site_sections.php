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

        Schema::create('web_site_sections', function(Blueprint $table){
            $table->id();
            $table->string("user_id");
            $table->integer('intorduction_section');
            $table->integer('about_section');
            $table->integer('skills_section');
            $table->integer('education_section');
            $table->integer('project_section');
            $table->string('selected_template_id');
            $table->string('selected_template_name');
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
