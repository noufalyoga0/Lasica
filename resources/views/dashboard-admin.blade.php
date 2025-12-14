<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-md p-6">
        <h1 class="text-xl font-bold text-blue-600 mb-8">Lasica Trip</h1>

        <ul class="space-y-5 text-gray-600">

        <li>
            <a href="{{ route('dashboard-admin') }}"
               class="block hover:text-blue-600 font-medium">
               Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('trip-admin') }}"
               class="block hover:text-blue-600 font-medium">
               Trip
            </a>
        </li>

        <li>
            <a href="{{ route('admin-transactions') }}"
               class="block hover:text-blue-600">
               Transactions
            </a>
        </li>

        <li>
            <a href="{{ route('admin-accounts') }}"
               class="block hover:text-blue-600">
               Accounts
            </a>
        </li>

        <li>
            <a href="{{ route('admin-settings') }}"
               class="block hover:text-blue-600">
               Setting
            </a>
        </li>
    </ul>
    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- NAVBAR -->
        <header class="bg-white shadow px-6 py-6 flex justify-between items-center">
              <h2 class="font-semibold" style="font-size: 30px;">Overview</h2>

            <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">

            @auth
            <a href="{{ route('profile') }}">
                <img
                    src="{{ Str::startsWith(auth()->user()->avatar, 'http')
                        ? auth()->user()->avatar
                        : asset('storage/' . auth()->user()->avatar) }}"
                    class="user-icon"
                    style="width:35px;height:35px;border-radius:50%;object-fit:cover;"
                >
            </a>
            @endauth
        </header>

        <!-- CONTENT -->
        <main class="p-6 space-y-6">

          <!-- TOP GRID -->
            <div class="grid grid-cols-12 gap-6">

                <!-- PENDAPATAN -->
                <div class="col-span-8 bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-4">Pendapatan</h3>

                    <!-- SUMMARY -->
                <div class="flex items-center justify-between bg-gray-50 rounded-lg px-6 py-4 mb-6">

                    <!-- TOTAL -->
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Total Pendapatan</span>
                        <span class="text-lg font-bold text-gray-900">
                            Rp 125.000.000
                        </span>
                    </div>

                    <div class="h-8 w-px bg-gray-300"></div>

                    <!-- BULAN INI -->
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Bulan Ini</span>
                        <span class="text-lg font-bold text-green-600">
                            Rp 18.500.000
                        </span>
                    </div>

                    <div class="h-8 w-px bg-gray-300"></div>

                    <!-- HARI INI -->
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Hari Ini</span>
                        <span class="text-lg font-bold text-blue-600">
                            Rp 2.300.000
                        </span>
                    </div>
                </div>

                    <div class="grid grid-cols-2 gap-6">
                    <!-- MONTHLY INCOME -->
                    <div class="bg-gray-50 p-4 rounded-lg" style="height:16rem;"> <!-- h-64 = 16rem -->
                        <p class="text-sm text-gray-500 mb-2">Pendapatan per Bulan</p>
                        <canvas id="monthlyIncomeChart" class="w-full h-full"></canvas>
                    </div>

                    <!-- TRIP INCOME -->
                    <div class="bg-gray-50 p-4 rounded-lg" style="height:16rem;">
                        <p class="text-sm text-gray-500 mb-2">Pendapatan per Trip</p>
                        <canvas id="tripIncomeChart" class="w-full h-full"></canvas>
                    </div>
            </div>

                </div>

                <!-- TRANSAKSI TERBARU -->
                <div class="col-span-4 bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-4">Transaksi Terbaru</h3>

                    <ul class="space-y-3 text-sm">
                        <li class="flex justify-between">
                            <span>QRIS</span>
                            <span class="text-green-600">+Rp600.000</span>
                        </li>
                        <li class="flex justify-between">
                            <span>BCA</span>
                            <span class="text-green-600">+Rp600.000</span>
                        </li>
                    </ul>
                </div>

            </div>


            <!-- BOTTOM GRID -->
            <div class="grid grid-cols-12 gap-6">

                <!-- WEEKLY ACTIVITY -->
                <div class="col-span-8 bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-4">Grafik pesanan</h3>

                    <!-- PENTING: tinggi chart -->
                    <div class="h-64">
                        <canvas id="weeklyChart"></canvas>
                    </div>
                </div>

                <!-- EXPENSE -->
                <div class="col-span-4 bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-4">Pendakian Favorite</h3>

                    <div class="h-64">
                        <canvas id="expenseChart"></canvas>
                    </div>
                </div>

            </div>

        </main>
    </div>
</div>

<script>
new Chart(document.getElementById('weeklyChart'), {
    type: 'bar',
    data: {
        labels: ['Jan','Feb','Mar','Apr','Mei','Jun','jul', 'Agt','Sep','Okt','Nov','Des'],
        datasets: [
            { label: 'Open Trip', data: [10,15,10,15,10,15,10,15,10,15,10,15] },
            { label: 'Private Trip', data: [5,5,5,5,5,5,5,5,5,5,5,5]}
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

new Chart(document.getElementById('expenseChart'), {
    type: 'doughnut',
    data: {
        labels: ['Sindoro 2D1N','Rinjani','Tektok Lawu','Others'],
        datasets: [{
            data: [15,70,10,50]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

/* MONTHLY INCOME */
new Chart(document.getElementById('monthlyIncomeChart'), {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sep','Okt','Nov','Des'],
        datasets: [{
            label: 'Pendapatan',
            data: [12,15,10,18,20,25,22,24,26,30,28,35],
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37,99,235,0.2)',
            tension: 0.4,
            fill: true,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

/* TRIP INCOME */
new Chart(document.getElementById('tripIncomeChart'), {
    type: 'bar',
    data: {
        labels: ['Rinjani','Sindoro','Lawu','Semeru'],
        datasets: [{
            data: [35,18,22,15],
            backgroundColor: '#16a34a'
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>
</html>
