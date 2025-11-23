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
    Schema::create('subtopics', function (Blueprint $table) {
        $table->id();
        $table->foreignId('topic_id')->constrained()->cascadeOnDelete();
        $table->string('title');
        $table->text('summary')->nullable();
        $table->longText('content')->nullable();
        $table->timestamps();
    });
}

};
