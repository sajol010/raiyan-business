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
            $table->string('product_name');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('union_id')->constrained('unions')->onDelete('cascade');
            $table->string('holding_no')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('village')->nullable();
            $table->string('paying_year');
            $table->string('product_type');
            $table->string('payment_amount');
            $table->string('total_tax');
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
