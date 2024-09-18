<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
      // Method untuk menampilkan data booking
      public function index(Request $request)
      {
          // Ambil semua data booking dari database
          $bookings = DB::table('booking')->get();

          // Oper data bookings ke view 'booked'
          return view('booked', compact('bookings'));
      }

    // Method untuk menyimpan booking baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_villa' => 'required|integer',
            'nama_pelanggan' => 'required|string',
            'tgl_checkin' => 'required|date',
            'estimasi_checkin' => 'required|date_format:H:i',
            'tgl_checkout' => 'required|date',
            'estimasi_checkout' => 'required|date_format:H:i',
            'jumlah_orang' => 'required|integer',
            'total_pembayaran' => 'required|integer',
            'jumlah_dp' => 'required|integer',
            'tgl_dp' => 'required|date',
            'bukti_dp' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'additional' => 'nullable|string',
        ]);

        // Proses upload file bukti DP
        if ($request->hasFile('bukti_dp')) {
            $bukti_dp_path = $request->file('bukti_dp')->store('bukti_dp', 'public');
        } else {
            $bukti_dp_path = null;
        }

        // Insert data ke tabel booking
        DB::table('booking')->insert([
            'id_pelanggan' => 1,  // Default pelanggan, kamu bisa sesuaikan ini
            'id_villa' => $request->id_villa,
            'tgl_checkin' => $request->tgl_checkin,
            'estimasi_checkin' => $request->estimasi_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'estimasi_checkout' => $request->estimasi_checkout,
            'jumlah_orang' => $request->jumlah_orang,
            'total_pembayaran' => $request->total_pembayaran,
            'jumlah_dp' => $request->jumlah_dp,
            'tgl_dp' => $request->tgl_dp,
            'bukti_dp' => $bukti_dp_path,  // Simpan path file bukti DP
            'additional' => $request->additional,
        ]);

        // Redirect ke halaman form booking dengan pesan sukses
        return redirect()->route('booking')->with('message', 'Booking berhasil dibuat');
    }
}
