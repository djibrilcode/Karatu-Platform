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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
           $table->string('slug');
            $table->text('description');
            $table->string('image_url');
            $table->decimal('price',10,2);
            $table->unsignedBigInteger('sous_categorie_id');
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categories')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
