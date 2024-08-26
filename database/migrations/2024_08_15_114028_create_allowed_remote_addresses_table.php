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
        Schema::create('allowed_remote_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->text('description');
            $table->timestamps();
            $table->unique(['ip_address']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowed_remote_addresses');
    }
};
