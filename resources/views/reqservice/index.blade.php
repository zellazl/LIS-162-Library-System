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

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Service Request ID</th>
                    <th>Full Name</th>
                    <th>Type of Service</th>
                    <th>Date of Service</th>
                    <th>Timeslot</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reqservices as $reqservice)
                <tr>
                    <td>{{ $reqservice->id }}</td>
                    <td>{{ $reqservice->user_fullname }}</td>
                    <td>{{ $reqservice->service_name }}</td>
                    <td>{{ $reqservice->service_date }}</td>
                    <td>{{ $reqservice->time_slot }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownButton = document.getElementById('dropdownAvatarNameButton');
            const dropdownMenu = document.getElementById('dropdownAvatarName');

            dropdownButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });

            window.addEventListener('click', function (e) {
                if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
