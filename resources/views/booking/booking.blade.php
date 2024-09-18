<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Booking Here') }}
    </h2>
</x-slot>
<!-- resources/views/booking.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @if(session()->has('message'))

        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ session()->get('message') }}
          </div>
    @endif
        <h1>Form Booking</h1>
        <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                <input type="number" class="form-control" id="id_pelanggan" name="id_pelanggan">
            </div>
            <div class="mb-3">
                <label for="id_villa" class="form-label">ID Villa</label>
                <input type="number" class="form-control" id="id_villa" name="id_villa" >
            </div>
            <div class="mb-3">
                <label for="tgl_checkin" class="form-label">Tanggal Check-in</label>
                <input type="date" class="form-control" id="tgl_checkin" name="tgl_checkin">
            </div>
            <div class="mb-3">
                <label for="estimasi_checkin" class="form-label">Estimasi Check-in</label>
                <input type="time" class="form-control" id="estimasi_checkin" name="estimasi_checkin">
            </div>
            <div class="mb-3">
                <label for="tgl_checkout" class="form-label">Tanggal Check-out</label>
                <input type="date" class="form-control" id="tgl_checkout" name="tgl_checkout">
            </div>
            <div class="mb-3">
                <label for="estimasi_checkout" class="form-label">Estimasi Check-out</label>
                <input type="time" class="form-control" id="estimasi_checkout" name="estimasi_checkout">
            </div>
            <div class="mb-3">
                <label for="jumlah_orang" class="form-label">Jumlah Orang</label>
                <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang">
            </div>
            <div class="mb-3">
                <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                <input type="number" class="form-control" id="total_pembayaran" name="total_pembayaran">
            </div>
            <div class="mb-3">
                <label for="jumlah_dp" class="form-label">Jumlah DP</label>
                <input type="number" class="form-control" id="jumlah_dp" name="jumlah_dp">
            </div>
            <div class="mb-3">
                <label for="tgl_dp" class="form-label">Tanggal DP</label>
                <input type="date" class="form-control" id="tgl_dp" name="tgl_dp">
            </div>
            <div class="mb-3">
                <label for="bukti_dp" class="form-label">Bukti DP</label>
                <input type="file" class="form-control" id="bukti_dp" name="bukti_dp" >
            </div>
            <div class="mb-3">
                <label for="additional" class="form-label">Additional</label>
                <textarea class="form-control" id="additional" name="additional"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

