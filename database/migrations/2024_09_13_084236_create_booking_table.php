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
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->integer('id_pelanggan');
            $table->integer('id_villa');
            $table->date('tgl_checkin');
            $table->time('estimasi_checkin');
            $table->date('tgl_checkout');
            $table->time('estimasi_checkout');
            $table->integer('jumlah_orang');
            $table->integer('total_pembayaran');
            $table->integer('jumlah_dp');
            $table->date('tgl_dp');
            $table->string('bukti_dp');
            $table->text('additional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
