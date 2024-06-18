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
        Schema::table('request_roles', function (Blueprint $table) {
            $table->string('aadhar')->nullable()->after('role_permission_status');
            $table->string('pan')->nullable()->after('aadhar');
            $table->string('GST')->nullable()->after('pan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request_roles', function (Blueprint $table) {
            $table->dropColumn('aadhar');
            $table->dropColumn('pan');
            $table->dropColumn('GST');
        });
    }
};
