<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sepatu', 50);
            $table->bigInteger('id_merk')->unsigned();
            $table->string('ukuran', 5);
            $table->string('deskripsi', 250)->nullable();
            $table->string('warna', 50);
            $table->timestamps();
        });

        Schema::table('produk', function (Blueprint $table) {
            $table->foreign('id_merk')->references('id')->on('merk')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
