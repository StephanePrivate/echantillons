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
        Schema::create('textures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->constrained();
            $table->char('texture_name',55);
            $table->char('texture_product_family',55);
            $table->char('texture_number',55);
            $table->boolean('texture_hrr')->nullable()->default('0');
            $table->char('texture_grain',55);
            $table->decimal('texture_thickness',5,2);
            $table->decimal('texture_weight',6,2);
            $table->char('texture_backcloth',250);
            $table->char('texture_weave',55)->nullable()->default('N/A');
            $table->boolean('texture_microbial');
            $table->boolean('texture_inkresist');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('textures');
    }
};
