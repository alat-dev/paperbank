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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id");
            $table->foreignId("category_id");
            $table->foreignId("course_id");
            $table->foreignId("university_id");
            $table->string("title");
            $table->string("description")->default('');
            $table->integer('year');
            $table->integer('view_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->integer('dislike_count')->default(0);
            // $table->string('subject');
            $table->string("pdf_file");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
};
