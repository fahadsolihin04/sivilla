<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Here') }}
        </h2>
    </x-slot>
<!-- resources/views/booked.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Booking Villa</h1>

        <div class="alert alert-info mt-4">
            Ini adalah tampilan sementara data booking. Nantinya, data akan diambil dari database.
        </div>

        <table class="table table-bordered table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID Booking</th>
                    <th>ID Pelanggan</th>
                    <th>ID Villa</th>
                    <th>Tanggal Check-in</th>
                    <th>Estimasi Check-in</th>
                    <th>Tanggal Check-out</th>
                    <th>Estimasi Check-out</th>
                    <th>Jumlah Orang</th>
                    <th>Total Pembayaran</th>
                    <th>Jumlah DP</th>
                    <th>Tanggal DP</th>
                    <th>Bukti DP</th>
                    <th>Additional</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1001</td>
                    <td>5001</td>
                    <td>2024-09-20</td>
                    <td>14:00</td>
                    <td>2024-09-25</td>
                    <td>12:00</td>
                    <td>4</td>
                    <td>3,500,000</td>
                    <td>1,500,000</td>
                    <td>2024-09-15</td>
                    <td><img src="https://via.placeholder.com/100" alt="Bukti DP"></td>
                    <td>Request kamar dekat kolam renang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1002</td>
                    <td>5002</td>
                    <td>2024-09-22</td>
                    <td>15:00</td>
                    <td>2024-09-27</td>
                    <td>11:00</td>
                    <td>2</td>
                    <td>2,000,000</td>
                    <td>500,000</td>
                    <td>2024-09-17</td>
                    <td><img src="https://via.placeholder.com/100" alt="Bukti DP"></td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>
