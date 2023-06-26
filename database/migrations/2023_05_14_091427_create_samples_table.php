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
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->nullable()->constrained();
            $table->char('sample_reference', 20);
            $table->char('rematched_from', 20)->nullable();
            $table->foreignId('mills_id')->nullable()->constrained();
            $table->foreignId('products_id')->constrained();
            $table->foreignId('textures_id')->nullable()->constrained();
            $table->text('texture_note');
            $table->boolean('hrr');

            $table->foreignId('airlines_id')->nullable()->constrained();
            $table->unsignedBigInteger('contact_at_airline_id')->nullable();
            $table->foreign('contact_at_airline_id')->references('id')->on('customers');
            $table->unsignedBigInteger('executive2_airline_id')->nullable();
            $table->foreign('executive2_airline_id')->references('id')->on('executives');

            $table->foreignId('design_companies_id')->nullable()->constrained();
            $table->unsignedBigInteger('contact_at_designer_id')->nullable();
            $table->foreign('contact_at_designer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('executive2_designer_id')->nullable();
            $table->foreign('executive2_designer_id')->references('id')->on('executives');

            $table->date('date_entry')->nullable();
            $table->date('date_eta')->nullable();
            $table->date('date_received')->nullable();
            $table->date('date_sent')->nullable();
            $table->date('date_approved')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
