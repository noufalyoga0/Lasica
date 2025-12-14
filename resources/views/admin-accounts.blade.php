<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Accounts</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-md p-6">
        <h1 class="text-xl font-bold text-blue-600 mb-8">Lasica Trip</h1>

        <ul class="space-y-4 text-gray-600">
            <li><a href="dashboard-admin" class="hover:text-blue-600">Dashboard</a></li>
            <li><a href="trip-admin" class="hover:text-blue-600">Trip</a></li>
            <li><a href="/admin-transactions" class="hover:text-blue-600">Transactions</a></li>
            <li class="text-blue-600 font-semibold">Accounts</li>
            <li><a href="/admin-settings" class="hover:text-blue-600">Setting</a></li>
        </ul>
    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- NAVBAR -->
        <header class="bg-white shadow px-6 py-6 flex justify-between items-center">
            <h2 class="text-lg font-semibold">Accounts</h2>
            <input type="text" placeholder="Search user..." class="border rounded-lg px-3 py-1 text-sm">
        </header>

        <!-- CONTENT -->
        <main class="p-6 space-y-6">

            <!-- SUMMARY -->
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total User Terdaftar</p>
                <h3 class="text-3xl font-bold">128 User</h3>
            </div>

            <!-- TABLE -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-4">Daftar User</h3>

                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b text-gray-500">
                            <th class="py-3">Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr>
                            <td class="py-3">Anisa Rahmawati</td>
                            <td>anisa@email.com</td>
                            <td>User</td>
                            <td>10 Jan 2025</td>
                            <td class="text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-3">Budi Santoso</td>
                            <td>budi@email.com</td>
                            <td>User</td>
                            <td>12 Jan 2025</td>
                            <td class="text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-3">Admin Lasica</td>
                            <td>admin@lasicatrip.com</td>
                            <td>Admin</td>
                            <td>01 Jan 2025</td>
                            <td class="text-blue-600">Admin</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </main>
    </div>
</div>

</body>
</html>
