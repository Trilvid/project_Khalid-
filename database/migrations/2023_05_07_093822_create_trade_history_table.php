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
        Schema::create('trade_history', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('asset');
            $table->decimal('stake_price',9,2)->default(0);
            $table->string('type');
            $table->decimal('amount',9,2)->default(0);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trade_history');
    }
};
