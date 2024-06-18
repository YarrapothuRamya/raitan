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
        Schema::table('user__register__logs', function (Blueprint $table) {
            $table->renameColumn('error', 'description');
            //$table->string('status')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user__register__logs', function (Blueprint $table) {
            $table->renameColumn('description', 'error');
            //$table->dropColumn('status');
        });
    }
};
