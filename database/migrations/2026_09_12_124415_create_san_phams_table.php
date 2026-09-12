<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id('MaSanPham');
            $table->string('TenSanPham', 100);
            $table->decimal('Gia', 10, 2);
            $table->unsignedBigInteger('MaDanhMuc');

            $table->foreign('MaDanhMuc')
                  ->references('MaDanhMuc')
                  ->on('danhmuc')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sanpham');
    }
};
