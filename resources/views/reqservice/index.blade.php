<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
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
    <header class="services flex items-center space-x-4 pl-10">
        <div>
            <h1 class="text-xl font-bold text-amber-800">Services</h1>
            <nav class="flex space-x-8 mt-2 text-sm font-bold">
                <a href="/" class="hover:text-amber-600">Home</a>
                <a href="/about_us" class="hover:text-amber-600">About Us</a>
                <a href="/contact_us" class="hover:text-amber-600">Contact Us</a>
                <div class="relative">
                    <button id="dropdownAvatarNameButton" class="flex items-center text-sm font-bold text-gray-900 rounded-full hover:text-blue-600">
                        <span class="hover:text-amber-600">Services</span>
                    </button>
                    <div id="dropdownAvatarName" class="hidden absolute right-0 bg-white border border-gray-300 rounded shadow-lg mt-2">
                        <ul>
                            <li><a href="/services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a></li>
                            <li><a href="/collection" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Collection</a></li>
                            <li><a href="/resources" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Resources</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Service Request ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
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
                    <td>{{ $reqservice->user_email }}</td>
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
