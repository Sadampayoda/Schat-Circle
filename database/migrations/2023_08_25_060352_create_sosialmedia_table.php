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
        Schema::create('sosialmedia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->enum('media',[
                'WhatsApp',
                'Instagram',
                'Github',
                'Twitter',
                'Telegram',
                'Discord',
                'Tiktok',
                'Other'
            ]);
            $table->string('link');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosialmedia');
    }
};
