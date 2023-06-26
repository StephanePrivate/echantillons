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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->boolean('buyer')->nullable();
            $table->boolean('engineer')->nullable();
            $table->boolean('designer')->nullable();
            $table->boolean('other')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('airline_id')->nullable()->constrained();
            $table->foreignId('design_company_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
