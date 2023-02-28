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
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            $table->string("gateway_id")->nullable();
            $table->string("content_id")->comment("tax id or certificate id");
            $table->string("transaction_id")->nullable();
            $table->string("currency")->nullable();
            $table->json("response")->nullable();
            $table->unsignedInteger("is_paid")->default(0)->comment("1 for paid, 0 for paid");
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
