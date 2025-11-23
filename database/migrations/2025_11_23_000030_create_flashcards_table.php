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
    Schema::create('flashcards', function (Blueprint $table) {
        $table->id();
        $table->foreignId('topic_id')->constrained()->cascadeOnDelete();
        $table->foreignId('subtopic_id')->nullable()->constrained()->nullOnDelete();
        $table->text('front');   // pregunta / lado frontal
        $table->text('back');    // respuesta / lado trasero
        $table->text('extra')->nullable();   // mnemotecnia, explicación
        $table->string('source')->nullable(); // guía, referencia, link
        $table->timestamps();
    });
}

};
