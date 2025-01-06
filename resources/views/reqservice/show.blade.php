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
    </style>
</head>

<body>
    <!-- Header -->
    <header class="services flex items-center space-x-4 pl-10 bg-[#fddc58] border-b border-[#e0e0e0]">
        <div>
            <h1 class="text-xl font-bold text-black">Services</h1>
            <nav class="flex space-x-8 mt-2 text-sm font-bold">
                <a href="/" class="hover:text-amber-600">Home</a>
                <a href="/about_us" class="hover:text-amber-600">About Us</a>
                <a href="/contact_us" class="hover:text-amber-600">Contact Us</a>
                <div class="relative">
                    <button id="dropdownAvatarNameButton" class="flex items-center text-sm font-bold text-gray-900 rounded-full hover:text-amber-600">
                        <span class="hover:text-amber-600">Services</span>
                    </button>
                    <div id="dropdownAvatarName" class="hidden absolute right-0 bg-white border border-gray-300 rounded shadow-lg mt-2 z-10">
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

    <!-- Content -->
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-x1 sm:rounded lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-3 mb-5 text-2x1 font-bold text-black">Receipt</h1>

                    <table class="mt-6 text-black leading-relaxed">
                        <tr>
                            <th class="border border-[#ff0000] px-6 py-3">Service Request ID</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->id }}</td>

                            <th class="border border-[#ff0000] px-6 py-3">Full name</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->user_fullname }}</td>

                            <th class="border border-[#ff0000] px-6 py-3">Email</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->user_email }}</td>

                            <th class="border border-[#ff0000] px-6 py-3">Type of Service</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->service_name }}</td>

                            <th class="border border-[#ff0000] px-6 py-3">Date of Service</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->service_date }}</td>

                            <th class="border border-[#ff0000] px-6 py-3">Timeslot</th>
                            <td class="border border-[#ff0000] px-6 py-3">&nbsp;</td>
                            <td class="border border-[#ff0000] px-6 py-3">{{ $reqservice->time_slot }}</td>
                        </tr>
                    </table>

                    <button type="button" class="rounded-md bg-[#fddc58] hover:bg-[#ffcc00] px-3 py-2 mt-8 text-sm font-semibold text-black">
                        <a href="{{ route('reqservices.create') }}">Go to input</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#fddc58] text-center py-5 border-t border-[#e0e0e0]">
        <p class="footer-text font-bold text-black">UP School of Library and Information Science Studies Library</p>
        <p class="footer-location text-black">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>

    <!-- Dropdown Menu Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownButton = document.getElementById('dropdownAvatarNameButton');
            const dropdownMenu = document.getElementById('dropdownAvatarName');

            // Toggle the dropdown visibility
            dropdownButton.addEventListener('click', function (event) {
                event.stopPropagation(); // Prevent click event from propagating to window
                dropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            window.addEventListener('click', function (event) {
                if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
