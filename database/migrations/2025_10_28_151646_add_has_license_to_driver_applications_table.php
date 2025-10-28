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
            $table->boolean('has_license')->default(false)->after('has_vehicle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->dropColumn('has_license');
        });
    }
};
