<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Testimoni - Lasica Trip Adventure</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .form-wrapper {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px 35px;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .form-wrapper h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 700;
        }

        .form-wrapper p {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 2px solid #d0ecf9;
            outline: none;
            font-size: 14px;
        }

        .form-group textarea {
            resize: none;
            height: 110px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #00b4ff;
        }

        /* === STAR RATING === */
        .stars {
            display: flex;
            gap: 6px;
            font-size: 26px;
            cursor: pointer;
        }

        .stars span {
            color: #ccc;
            transition: 0.2s;
        }

        .stars span.active {
            color: #f1c40f;
        }

        /* === BUTTON === */
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }

        .btn-cancel {
            background: #bdc3c7;
            color: #333;
            padding: 10px 26px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-submit {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>



<div class="form-wrapper">
    <h2>Tambah Ulasan</h2>
    <p>Bagikan pengalaman perjalananmu bersama Lasica Trip Adventure</p>

    <form action="{{ route('testimoni.store') }}" method="POST">
        @csrf

        <!-- NAMA -->
        <div class="form-group">
            <label>Nama</label>
            <input type="text" value="{{ auth()->user()->name }}"readonly>
        </div>

        <!-- RATING -->
        <div class="form-group">
            <label>Rating</label>
            <div class="stars" id="starRating">
                <span data-value="1">★</span>
                <span data-value="2">★</span>
                <span data-value="3">★</span>
                <span data-value="4">★</span>
                <span data-value="5">★</span>
            </div>
            <input type="hidden" name="rating" id="rating">
        </div>

        <!-- ULASAN -->
        <div class="form-group">
            <label>Ulasan</label>
            <textarea name="ulasan" placeholder="Tulis pengalaman trip kamu..." required></textarea>
        </div>

        <div class="form-actions">
            <a href="{{ route('testimoni') }}" class="btn-cancel">Batal</a>
            <button type="submit" class="btn-submit">Kirim Ulasan</button>
        </div>
    </form>
</div>



<script>
    const stars = document.querySelectorAll('#starRating span');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            let value = star.getAttribute('data-value');
            ratingInput.value = value;

            stars.forEach(s => s.classList.remove('active'));
            for (let i = 0; i < value; i++) {
                stars[i].classList.add('active');
            }
        });
    });
</script>

</body>
</html>
