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
        Schema::create('revisor_announcements', function (Blueprint $table)
        {   
            $table->id();
            $table->foreignId('announcement_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();

            // $table->foreignId('announcement_id')->references ('id')->on('announcements')->nullable()->onDelete('SET NULL');
            // $table->foreignId('user_id')-> references ('id')->on('users')->nullable()->onDelete('SET NULL');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('revisor_announcements', function (Blueprint $table){
            $table->dropForeign('announcement_id');
            $table->dropForeign('user_id');
            $table->dropColumn('announcement_id');
            $table->dropColumn('user_id');
        } );
        // Schema::dropIfExists('revisor_announcements');
    }
};
