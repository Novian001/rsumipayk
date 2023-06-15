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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title"); // add this line
            $table->string("slug")->unique(); // add this line
            $table->string("excerpt"); // add this line
            $table->text("body"); // add this line
            $table->string("image")->nullable(); // add this line
            $table->string("category_id"); // add this line
            $table->string("user_id"); // add this line
            $table->timestamp('published_at')->nullable(); // add this line
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
