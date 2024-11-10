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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id(); // Ini menghasilkan unsignedBigInteger untuk kolom 'id'
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->decimal('rating', 2, 1)->nullable();
            $table->tinyInteger('seats');
            $table->string('engine_type');
            $table->string('range');
            $table->string('transmission');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};