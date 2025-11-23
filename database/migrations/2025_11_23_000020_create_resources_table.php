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
    Schema::create('resources', function (Blueprint $table) {
        $table->id();
        $table->foreignId('subtopic_id')->constrained()->cascadeOnDelete();
        $table->enum('type', ['video', 'pdf', 'link', 'image'])->default('link');
        $table->string('title');
        $table->string('url');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

};
