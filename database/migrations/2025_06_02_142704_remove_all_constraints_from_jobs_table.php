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
    Schema::table('jobs', function (Blueprint $table) {
        try {
            DB::statement('ALTER TABLE jobs DROP CHECK chk_job_type');
        } catch (\Exception $e) {}
        
        try {
            DB::statement('ALTER TABLE jobs DROP CHECK chk_status');
        } catch (\Exception $e) {}
        
        try {
            DB::statement('ALTER TABLE jobs DROP CHECK chk_job_location');
        } catch (\Exception $e) {}
        
        try {
            DB::statement('ALTER TABLE jobs DROP CHECK chk_status_correct');
        } catch (\Exception $e) {}
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            if (config('database.default') !== 'sqlite') {
                DB::statement("ALTER TABLE jobs ADD CONSTRAINT chk_job_type CHECK (job_type IN ('Full-time', 'Part-time', 'Internship', 'Freelance'))");
                DB::statement("ALTER TABLE jobs ADD CONSTRAINT chk_status CHECK (status IN ('pending', 'approved', 'rejected'))");
                DB::statement("ALTER TABLE jobs ADD CONSTRAINT chk_job_location CHECK (job_location IN ('on-site', 'Remote', 'Hybrid'))");
            }
        });
    }
};
