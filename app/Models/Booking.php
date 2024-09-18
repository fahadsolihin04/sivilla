<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $primaryKey = 'id_booking';

    public $timestamps = true;

    protected $fillable = [
        'id_pelanggan',
        'id_villa',
        'tgl_checkin',
        'estimasi_checkin',
        'tgl_checkout',
        'estimasi_checkout',
        'jumlah_orang',
        'total_pembayaran',
        'jumlah_dp',
        'tgl_dp',
        'bukti_dp',
        'additional',
    ];
}
