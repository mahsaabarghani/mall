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
        Schema::create('factores', function (Blueprint $table) {
            $table->id();
            $table->string('shop_id');
            $table->string('total_amount');
            $table->string('due_date'); //تاریخ سررسید
            $table->string('payment_date');
            $table->string('status');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factores');
    }
};
