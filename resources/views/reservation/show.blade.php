<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Receipt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #fddc58;
            border-bottom: 1px solid #e0e0e0;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .table-container {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
            background-color: white;
            flex-grow: 1;
        }

        .table-container table {
            width: 100%;
            border: 1px solid #ff0000;
        }

        .table-container th,
        .table-container td {
            border: 1px solid #ff0000;
            text-align: center;
            padding: 10px;
        }

        .table-container th {
            background-color: #ffffff;
            font-weight: bold;
        }

        footer {
            width: 100%;
            box-sizing: border-box;
            background-color: #fddc58;
            text-align: center;
            padding: 16px 0;
        }
    </style>
</head>

<body>
    <header class="services flex items-center space-x-4 pl-10">
        <a href="/" class="flex-shrink-0">
            <img class="h-20 w-auto" src="{{ asset('images/logo_no.png') }}" alt="Logo">
        </a>
        <div>
            <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY</a>
            <nav class="flex space-x-8 mt-2 text-sm font-bold">
                <a href="/dashboard" class="hover:text-amber-600">Dashboard</a>
            </nav>
        </div>
    </header>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-x1 sm:rounded lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-3 mb-5 text-2xl font-bold text-black">Receipt</h1>
    
    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
        <tr>
            <th class="border border-slate-300 px-6 py-3">User ID</th>
            <td class="border border-slate-300 px-6 py-3">{{ $reservation->id }}</td>

            <th class="border border-slate-300 px-6 py-3">User Email</th>
            <td class="border border-slate-300 px-6 py-3">{{ $reservation->user->email }}</td>

            <th class="border border-slate-300 px-6 py-3">Facility</th>
            <td class="border border-slate-300 px-6 py-3">{{ $reservation->facility }}</td>

            <th class="border border-slate-300 px-6 py-3">Timeslot</th>
            <td class="border border-slate-300 px-6 py-3">{{ $reservation->from }}-{{ $reservation->until }}</td>

            <th class="border border-slate-300 px-6 py-3">Reservation Date</th>
            <td class="border border-slate-300 px-6 py-3">{{ $reservation->reservation_date }}</td>
         </tr>
        
    </table>
    <button type="button" class="rounded-md bg-[#fddc58] hover:bg-[#ffcc00] px-3 py-2 mt-8 text-sm font-semibold text-black">
        <a href="{{ route('reservations.create') }}">Go to input</a>
    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="absolute -bottom-2">
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>

</body>
</html>
