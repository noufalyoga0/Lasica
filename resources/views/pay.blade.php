<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
</head>
<body>

<h2>Pembayaran Trip: {{ $trip->nama_trip }}</h2>
<p>Harga: Rp {{ number_format($trip->harga) }}</p>

<button id="pay-button">Bayar Sekarang</button>

<!-- Midtrans Snap JS -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}">
</script>

<script>
    document.getElementById('pay-button').addEventListener('click', function () {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                alert('Pembayaran berhasil');
                console.log(result);
            },
            onPending: function(result){
                alert('Menunggu pembayaran');
                console.log(result);
            },
            onError: function(result){
                alert('Pembayaran gagal');
                console.log(result);
            }
        });
    });
</script>

</body>
</html>
