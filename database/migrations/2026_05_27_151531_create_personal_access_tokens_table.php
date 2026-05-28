<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('list_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->decimal('salary', 10, 2);
            $table->string('contact_email');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('list_jobs');
    }
};