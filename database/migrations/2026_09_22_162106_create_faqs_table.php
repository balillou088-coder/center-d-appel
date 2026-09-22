<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_create_faqs_table.php
public function up(): void
{
    Schema::create('faqs', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->text('answer');
        $table->enum('category', ['connexion', 'appels', 'clients', 'rapports', 'administration'])
              ->default('connexion');
        $table->integer('order')->default(0); // باش ترتب الأسئلة
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
