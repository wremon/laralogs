<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laralogs_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('user', 255)->nullable();
            $table->string('detail', 255)->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->timestamps();
        });
    }
};
