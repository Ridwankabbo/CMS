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

        Schema::create("usesprojects", function(Blueprint $table){
            $table->id();
            $table->string("project_name");
            $table->string("project_img");
            $table->string("project_git_url");
            $table->string("user_id");
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
