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
        Schema::create('u_devices', function (Blueprint $table) {
            $table->id();
            $table->string('uid',50)->unique();
            $table->string('type',50);
            $table->string('model',255);
            $table->string('serial_number',255);
            $table->float('purchase_price',10,2);
            $table->string('worker',50);
            $table->string('ucID',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_devices');
    }
};
