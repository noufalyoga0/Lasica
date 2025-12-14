<div class="trip-card">
    <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">

    <span class="label">Open Trip</span>

    <div class="info">
        <div class="date-badge">
            📅 {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
        </div>

        <div class="duration-badge">
            ⏱️ {{ $trip->durasi_hari }} Hari
        </div>

        <h3>{{ $trip->nama_trip }}</h3>

        <p>
            ⭐ {{ number_format($trip->rating, 1) }}
            ({{ number_format($trip->total_ulasan) }} Ulasan)
        </p>

        <p>📍 {{ $trip->lokasi }}</p>

        <p>🔥 {{ number_format($trip->total_dipesan) }}x dipesan</p>
        <p>👁️ {{ number_format($trip->views) }}x dilihat</p>

        <p class="price">
            Rp {{ number_format($trip->harga, 0, ',', '.') }}
        </p>

        <a href="{{ route('trip.detail', $trip->id) }}" class="btn-detail">
            Detail >
        </a>
    </div>
</div>
