<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Transactions</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-md p-6">
        <h1 class="text-xl font-bold text-blue-600 mb-8">Lasica Trip</h1>

        <ul class="space-y-5 text-gray-600">
            <li>
                <a href="{{ route('dashboard-admin') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('trip-admin') }}">Trip</a>
            </li>
            <li class="text-blue-600 font-semibold">
                <a href="{{ route('admin-transactions') }}">Transactions</a>
            </li>
            <li class="text-blue-600 font-semibold">
                <a href="{{ route('admin-accounts') }}">Accounts</a>
            </li>
            <li class="text-blue-600 font-semibold">
                <a href="{{ route('admin-settings') }}">Setting</a>
            </li>

        </ul>
    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- NAVBAR -->
        <header class="bg-white shadow px-6 py-6 flex justify-between items-center">
            <h2 class="text-lg font-semibold">Transactions</h2>
            <input type="text" placeholder="Search..."
                   class="border rounded-lg px-3 py-1 text-sm">
        </header>

        <!-- CONTENT -->
        <main class="p-6">

            <div class="bg-white rounded-xl shadow p-6">

                <!-- TAB -->
                <div class="flex gap-6 border-b pb-3 mb-4 text-sm">
                    <span class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-2">
                        All Transactions
                    </span>
                    <span class="text-gray-400">Income</span>
                    <span class="text-gray-400">Expense</span>
                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="text-gray-400 border-b">
                            <tr>
                                <th class="text-left py-3">Description</th>
                                <th class="text-left py-3">Transaction ID</th>
                                <th class="text-left py-3">Type</th>
                                <th class="text-left py-3">Payment</th>
                                <th class="text-left py-3">Date</th>
                                <th class="text-right py-3">Amount</th>
                                <th class="text-center py-3">Receipt</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">
                            <tr>
                                <td class="py-4">Spotify Subscription</td>
                                <td>#12548796</td>
                                <td>Service</td>
                                <td>QRIS</td>
                                <td>28 Jan, 12:30 AM</td>
                                <td class="text-right text-red-500">-Rp150.000</td>
                                <td class="text-center">
                                    <button class="border px-3 py-1 rounded-lg text-blue-600">
                                        Download
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">Open Trip Rinjani</td>
                                <td>#12548797</td>
                                <td>Income</td>
                                <td>BCA</td>
                                <td>27 Jan, 10:40 PM</td>
                                <td class="text-right text-green-500">+Rp2.500.000</td>
                                <td class="text-center">
                                    <button class="border px-3 py-1 rounded-lg text-blue-600">
                                        Download
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">Private Trip Lawu</td>
                                <td>#12548798</td>
                                <td>Income</td>
                                <td>Transfer</td>
                                <td>25 Jan, 09:15 AM</td>
                                <td class="text-right text-green-500">+Rp1.200.000</td>
                                <td class="text-center">
                                    <button class="border px-3 py-1 rounded-lg text-blue-600">
                                        Download
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="flex justify-end gap-2 mt-6 text-sm">
                    <button class="px-3 py-1 border rounded">Previous</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                    <button class="px-3 py-1 border rounded">2</button>
                    <button class="px-3 py-1 border rounded">Next</button>
                </div>

            </div>

        </main>
    </div>
</div>

</body>
</html>
