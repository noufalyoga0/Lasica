<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Midtrans Test</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
    </script>
</head>
<body>

<h2>Midtrans Snap Test</h2>

<button id="pay-button">Bayar Sekarang</button>

<script>
document.getElementById('pay-button').addEventListener('click', function () {
    snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
            alert("Pembayaran sukses");
            console.log(result);
        },
        onPending: function(result){
            alert("Menunggu pembayaran");
            console.log(result);
        },
        onError: function(result){
            alert("Pembayaran gagal");
            console.log(result);
        }
    });
});
</script>

</body>
</html>
