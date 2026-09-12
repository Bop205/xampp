<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('danhmuc', function (Blueprint $table) {
            $table->id('MaDanhMuc');
            $table->string('TenDanhMuc', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('danhmuc');
    }
};
