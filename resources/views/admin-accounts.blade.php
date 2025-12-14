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
        </header>

        <!-- CONTENT -->
        <main class="p-6 space-y-6">

            <!-- SUMMARY -->
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total User Terdaftar</p>
                <h3 class="text-3xl font-bold">{{ $totalUser }} User</h3>
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
                        @foreach ($users as $user)
                        <tr>
                            <td class="py-3">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role ?? 'User') }}</td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>

                            <td class="
                                {{ ($user->status ?? 'aktif') === 'aktif' ? 'text-green-600' : 'text-red-600' }}
                            ">
                                {{ ucfirst($user->status ?? 'Aktif') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </main>
    </div>
</div>

</body>
</html>
