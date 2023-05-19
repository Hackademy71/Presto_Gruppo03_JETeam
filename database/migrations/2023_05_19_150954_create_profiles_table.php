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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('surname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('city')->nullable();
            $table->char('state',2)->nullable();
            $table->char('CAP',5)->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('tel_number')->nullable();
            $table->boolean('contactMethod')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('profiles');
    }
};
