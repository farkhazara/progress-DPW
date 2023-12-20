<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Membuat tabel roles
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id
            $table->string('name'); // Menambahkan kolom name
            $table->timestamps(); // Menambahkan kolom timestamps
        });
    }

    /**
     * Mundurkan migrasi.
     */
    public function down(): void
    {
        // Menghapus tabel roles
        Schema::dropIfExists('roles');
    }
};
