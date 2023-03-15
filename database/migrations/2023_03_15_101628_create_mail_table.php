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
        Schema::create('mail', function (Blueprint $table) {
            $table->integer('id');
            $table->string('email_from')->nullable(false);
            $table->string('email_to')->nullable(false);
            $table->string('email_cc')->nullable();
            $table->string('user_agent')->nullable(false);
            $table->string('ip')->nullable(false);
            $table->string('UUID');
            $table->timestamps();
            $table->primary('id');
            $table->unique('UUID');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail');
    }
};
