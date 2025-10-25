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
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->string('password')->nullable()->after('email');
            $table->timestamp('approved_at')->nullable()->after('status');
            $table->timestamp('last_login_at')->nullable()->after('approved_at');
        });

        Schema::table('partner_applications', function (Blueprint $table) {
            $table->string('password')->nullable()->after('email');
            $table->timestamp('approved_at')->nullable()->after('status');
            $table->timestamp('last_login_at')->nullable()->after('approved_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->dropColumn(['password', 'approved_at', 'last_login_at']);
        });

        Schema::table('partner_applications', function (Blueprint $table) {
            $table->dropColumn(['password', 'approved_at', 'last_login_at']);
        });
    }
};
