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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', ['outgoing_document', 'incoming_document']);
            $table->unsignedBigInteger('document_category_id');
            $table->foreign('document_category_id')->references('id')->on('document_categories');
            $table->string('serial_number');
            $table->date('date');
            $table->boolean('is_trashed')->default(false);
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
