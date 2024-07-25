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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salon_id')->constrained('salons');
            $table->string('customer_name');
            $table->date('event_date');
            $table->date('contract_date');
            $table->string('customer_id')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->text('address')->nullable();
            $table->string('bride_groom')->nullable();
            $table->integer('guest_count')->nullable();
            $table->text('treats')->nullable();
            $table->text('services')->nullable();
            $table->text('extra_services')->nullable();
            $table->json('menu')->nullable();
            $table->decimal('list_price', 10, 2)->nullable();
            $table->decimal('venue_price', 10, 2)->nullable();
            $table->decimal('food_price', 10, 2)->nullable();
            $table->decimal('extra_service_price', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->text('discount_reason')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('payment', 10, 2)->nullable();
            $table->decimal('remaining_balance', 10, 2)->nullable();
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
