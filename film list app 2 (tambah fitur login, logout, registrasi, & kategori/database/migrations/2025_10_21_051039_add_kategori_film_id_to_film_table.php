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
        Schema::table('film', function (Blueprint $table) {
            $table->unsignedBigInteger('kategori_film_id')->after('rumah_produksi');
            $table->foreign('kategori_film_id')
                  ->references('id')
                  ->on('kategori_film')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('film', function (Blueprint $table) {
            $table->dropForeign(['kategori_film_id']);
            $table->dropColumn('kategori_film_id');
        });
    }
};