<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Setting</title>

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

</html>
