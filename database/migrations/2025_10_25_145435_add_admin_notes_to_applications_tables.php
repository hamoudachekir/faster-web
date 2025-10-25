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
            if (!Schema::hasColumn('driver_applications', 'admin_notes')) {
                $table->text('admin_notes')->nullable()->after('status');
            }
        });

        Schema::table('partner_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('partner_applications', 'admin_notes')) {
                $table->text('admin_notes')->nullable()->after('status');
            }
        });

        Schema::table('contact_submissions', function (Blueprint $table) {
            if (!Schema::hasColumn('contact_submissions', 'status')) {
                $table->string('status')->default('new')->after('is_read');
            }
            if (!Schema::hasColumn('contact_submissions', 'admin_notes')) {
                $table->text('admin_notes')->nullable()->after('status');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->dropColumn('admin_notes');
        });

        Schema::table('partner_applications', function (Blueprint $table) {
            $table->dropColumn('admin_notes');
        });

        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn(['status', 'admin_notes']);
        });
    }
};
