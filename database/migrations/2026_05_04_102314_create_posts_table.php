<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // Información principal
            $table->string('title');
            $table->string('slug')->unique();

            // Clasificación
            $table->string('type')->default('guia');
            $table->string('category')->default('Automatización');

            // Contenido
            $table->text('excerpt')->nullable();
            $table->longText('content');

            // Multimedia
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();

            // Control visual y publicación
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index(['type', 'is_published']);
            $table->index(['is_featured', 'is_published']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};