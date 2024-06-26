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
        Schema::table('user__login__logs', function (Blueprint $table) {
            $table->string('ipaddress')->after('audit_time')->nullable();
            $table->string('user_created_at')->after('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user__login__logs', function (Blueprint $table) {
            $table->dropColumn('ipaddress');
            $table->dropColumn('user_created_at');
        });
    }
};
