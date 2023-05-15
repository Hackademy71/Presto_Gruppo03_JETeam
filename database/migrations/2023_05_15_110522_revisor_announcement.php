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
        Schema::create('revisor_announcement', function (Blueprint $table)
        {
            $table->foreignId('announcement_id')-> references ('id')->on('announcemnts');
            $table->foreignId('user_id')-> references ('id')->on('users');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('revisor_announcement', function (Blueprint $table){
             $table->dropForeign('announcement_id');
        $table->dropForeign('user_id');
        $table->dropColumn('announcement_id');
        $table->dropColumn('user_id');
        }
    );
    }
};
