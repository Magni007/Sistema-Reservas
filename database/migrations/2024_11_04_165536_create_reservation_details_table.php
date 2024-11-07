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
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->string('transaction_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payer_email')->nullable(); //Email del comprador
            $table->string('payment_status')->nullable(); //Estado del pago
            $table->decimal('amount',10,2)->nullable();
            $table->text('response_json')->nullable();
            $table->timestamps();

            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_details');
    }
};
