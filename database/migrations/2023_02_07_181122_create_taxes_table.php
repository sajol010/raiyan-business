<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->string('building_name');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('union_id')->constrained('unions')->onDelete('cascade');
            $table->string('holding_no');
            $table->string('paying_year');
            $table->string('building_type');
            $table->string('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxes');
    }
};
