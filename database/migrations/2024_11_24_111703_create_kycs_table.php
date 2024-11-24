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
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->string('operator_name');  // Store the operator name
            $table->string('aadhar_card');    // Store the path to the uploaded Aadhar card
            $table->string('pan_card');       // Store the path to the uploaded PAN card
            $table->string('machine_rc');     // Store the path to the uploaded Machine RC
            $table->string('driving_licence'); // Store the path to the uploaded Driving License
            $table->string('business_id');
        $table->string('user_id');
            $table->timestamps();            // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
