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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("type")->comment("1 for tax, 2 for certificate");
            $table->foreignId('union_id')->constrained('unions')->onDelete('cascade');
            $table->float("amount");
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string("gateway_id")->nullable();
            $table->json("response")->nullable();
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
        Schema::dropIfExists('payments');
    }
};
