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
    Schema::create('support_tickets', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('subject');
        $table->enum('category', ['connexion', 'appels', 'compte', 'rapports', 'autre']);
        $table->enum('priority', ['basse', 'moyenne', 'haute', 'critique'])->default('moyenne');
        $table->text('message');
        $table->enum('status', ['ouvert', 'en_cours', 'resolu'])->default('ouvert');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_tickets');
    }
};
