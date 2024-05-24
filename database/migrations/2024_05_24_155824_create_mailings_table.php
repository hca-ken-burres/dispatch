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
        Schema::disableForeignKeyConstraints();

        Schema::create('mailings', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 200);
            $table->foreignId('envelope_id')->constrained();
            $table->foreignId('message_id')->constrained();
            $table->foreignId('dataset_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailings');
    }
};
