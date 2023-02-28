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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('b_name')->nullable();
            $table->string('b_gender')->nullable();
            $table->string('b_mother')->nullable();
            $table->string('b_father')->nullable();
            $table->string('b_husband')->nullable();
            $table->string('b_nid')->nullable();
            $table->string('b_birth_day')->nullable();
            $table->string('b_birth_no')->nullable();
            $table->string('b_phone')->nullable();
            $table->string('b_profession')->nullable();
            $table->string('b_present_holding')->nullable();
            $table->string('b_present_ward')->nullable();
            $table->string('b_present_village')->nullable();
            $table->string('b_present_union')->nullable();
            $table->string('b_present_upazilla')->nullable();
            $table->string('b_present_zilla')->nullable();
            $table->string('b_permanent_holding')->nullable();
            $table->string('b_permanent_ward')->nullable();
            $table->string('b_permanent_village')->nullable();
            $table->string('b_permanent_union')->nullable();
            $table->string('b_permanent_upazilla')->nullable();
            $table->string('b_permanent_zilla')->nullable();
            $table->string('e_name')->nullable();
            $table->string('e_gender')->nullable();
            $table->string('e_mother')->nullable();
            $table->string('e_father')->nullable();
            $table->string('e_husband')->nullable();
            $table->string('e_nid')->nullable();
            $table->string('e_birth_day')->nullable();
            $table->string('e_birth_no')->nullable();
            $table->string('e_phone')->nullable();
            $table->string('e_profession')->nullable();
            $table->string('e_present_holding')->nullable();
            $table->string('e_present_ward')->nullable();
            $table->string('e_present_village')->nullable();
            $table->string('e_present_union')->nullable();
            $table->string('e_present_upazilla')->nullable();
            $table->string('e_present_zilla')->nullable();
            $table->string('e_permanent_holding')->nullable();
            $table->string('e_permanent_ward')->nullable();
            $table->string('e_permanent_village')->nullable();
            $table->string('e_permanent_union')->nullable();
            $table->string('e_permanent_upazilla')->nullable();
            $table->string('e_permanent_zilla')->nullable();
            $table->string('language')->nullable();
            $table->string('medium')->nullable();
            $table->integer('status')->default(0); // 0 = pending, 1 = approved, 2 = rejected
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
