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
        Schema::create('sslcommerz_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('store_id', 500);
            $table->string('store_password', 500);
            $table->string('currency', 500);
            $table->string('success_url', 500);
            $table->string('fail_url', 500);
            $table->string('cancel_url', 500);
            $table->string('ipn_url', 500);
            $table->string('init_url', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sslcommerz_accounts');
    }
};
