<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Requests Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #fddc58;
            border-bottom: 1px solid #e0e0e0;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 50px;
            margin-right: 10px;
        }

        .logo-container .logo-text {
            font-weight: bold;
            font-size: 18px;
        }

        .logo-container .student-number {
            margin-top: 5px;
            font-size: 14px;
            color: #000000;
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

        .footer {
            width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: space-evenly;
            padding: 10px 0;
            background-color: white;
            border-top: 1px solid #e0e0e0;
        }

        .footer a {
            text-decoration: none;
            font-weight: bold;
            color: rgb(0, 0, 0);
            background-color: #ffd700;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .footer a:hover {
            background-color: #ffcc00;
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
    <header class="flex items-center space-x-4 pl-10">
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
        <div class="max-w-7xl mxauto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-x1 sm:rounded lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-3 mb-5 text-2x1 font-bold text-yellow-900">All Requests</h1>
    
    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
        <tr>
            <th class="border border-slate-300 px-6 py-3">User ID</th>
            <th class="border border-slate-300 px-6 py-3">EMAIL</th>
            <th class="border border-slate-300 px-6 py-3">FACILITY</th>
            <th class="border border-slate-300 px-6 py-3">FROM</th>
            <th class="border border-slate-300 px-6 py-3">UNTIL</th>
            <th class="border border-slate-300 px-6 py-3">RESERVATION DATE</th>
            <th class="border border-slate-300 px-6 py-3">ORDER DATE</th>
         </tr>
        @foreach($reservations as $reservation)
        <tr>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->user->id }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->user->email }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->facility }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->from }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->until }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->reservation_date }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reservation->created_at }}</td>
         </tr>
        @endforeach
    </table>
    <button type="button" class="rounded-md bg-[#fddc58] hover:bg-[#ffcc00] px-3 py-2 mt-8 text-sm font-semibold text-black">
        <a href="{{ route('reservations.create') }}">Go to input</a>
    </button>
                </div>
            </div>
        </div>
    </div>

</body>
    <footer class="absolute -bottom-2">
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>

