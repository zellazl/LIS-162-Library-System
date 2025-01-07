<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('images/logo_no.png') }}">
        <title>Admin Dashboard</title>
        <!-- TailWind CSS-->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Flowbite -->
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    </head>
    <!--CSS-->
    <style>
        table {
            table-layout: auto;
            width: 100%;
            margin-top: 8px;
            text-align: center;
            overflow-x: scroll;
            overflow-y: scroll;
        }
        tr {
            height: 1em;
        }

        .alert {
            transition: opacity 0.5s ease;
        }

        .fade-out {
            opacity: 0;
        }

    </style>
    <header class="mt-12 mx-8">
            <div class="flex">
                <a href="/"><img class="h-20 w-auto" src="{{ asset('images/logo_no.png') }}" alt="Logo"></a>
                <div class="block mt-4">
                    <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-bold text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-amber-600 md:me-0 dark:text-black" type="button">
                        {{ auth()->user()->name }}
                    </button>
                
                    <div id="dropdownAvatarName" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white dark:divide-slate-100">
                        <div class="px-4 py-3 text-sm text-white dark:text-black">
                            <div>Welcome</div>
                            <div class="font-bold truncate">{{ auth()->user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-black dark:text-black" aria-labelledby="dropdownUserAvatarNameButton">
                            <li>
                                <a href= "{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Profile</a>
                            </li>
                            <li>
                                <a href="/admin/statistics" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Statistics</a>
                            </li>
                        </ul>
                        <div class="py-2">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">
                                Log out
                            </button>
                        </form>
                        </div>
                    </div>
                </div> 
            </div>
    </header>

    <body>

        <div class="w-3/4 mt-12 mx-36">
            <p class="text-xl font-bold mb-4">Welcome back, {{ auth()->user()->name }}!</p>
            <h2 class="text-4xl font-bold mb-4 border-b-4 border-b-slate rounded-sm w-full">Dashboard</h2>
            <div class="text-sm text-center">
                @if(session('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger" id="error-message">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <fieldset>
                <input id="reservations" class="peer/reservations" type="radio" name="status" checked />
                <label for="reservations" class="peer-checked/reservations:text-amber-800 mr-4">Reservations</label>
              
                <input id="facilityreq" class="peer/facilityreq" type="radio" name="status" />
                <label for="facilityreq" class="peer-checked/facilityreq:text-amber-800 mr-4">Service</label>

                <input id="resourcereq" class="peer/resourcereq" type="radio" name="status" />
                <label for="resourcereq" class="peer-checked/resourcereq:text-amber-800 mr-4">Resource</label>
              
                <div class="hidden peer-checked/reservations:block">
                    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 px-6 py-3">ID</th>
                                <th class="border border-slate-300 px-6 py-3">Email</th>
                                <th class="border border-slate-300 px-6 py-3">Facility</th>
                                <th class="border border-slate-300 px-6 py-3">Time Slot </th>
                                <th class="border border-slate-300 px-6 py-3">Reservation Date</th>
                                <th class="border border-slate-300 px-6 py-3">Order Date</th>
                                <th class="border border-slate-300 px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->id }}</td>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->user->email }}</td>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->facility }}</td>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->from }}-{{ $reservation->until }}</td>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->reservation_date }}</td>
                                    <td class="border border-slate-300 px-4 py-1">{{ $reservation->created_at }}</td>
                                    <td class="border border-slate-300 px-4 py-1">
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="hidden peer-checked/facilityreq:block">
                    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
                        <tr>
                            <th class="border border-slate-300 px-6 py-3">Service Request ID</th>
                            <th class="border border-slate-300 px-6 py-3">User Name</th>
                            <th class="border border-slate-300 px-6 py-3">Type of Service</th>
                            <th class="border border-slate-300 px-6 py-3">Date of Service</th>
                            <th class="border border-slate-300 px-6 py-3">Timeslot</th>
                            <th class="border border-slate-300 px-6 py-3">Order Date</th>
                            <th class="border border-slate-300 px-6 py-3">Action</th>
                        </tr>
                        @foreach($reqservices as $reqservice)
                        <tr>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->id }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->user_fullname }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_name }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_date }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->time_slot }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->created_at }}</td>
                            <td class="border border-slate-300 px-4 py-1">
                                 <form action="{{ route('reqservices.destroy', $reqservice->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                                </form>
                            </td>    
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="hidden peer-checked/resourcereq:block">
                    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
                        <tr>
                            <th class="border border-slate-300 px-6 py-3">Resource Request ID</th>
                            <th class="border border-slate-300 px-6 py-3">Email</th>
                            <th class="border border-slate-300 px-6 py-3">Claim Date</th>
                            <th class="border border-slate-300 px-6 py-3">Title</th>
                            <th class="border border-slate-300 px-6 py-3">Author</th>
                            <th class="border border-slate-300 px-6 py-3">Accession Number</th>
                            <th class="border border-slate-300 px-6 py-3">Order Date</th>
                            <th class="border border-slate-300 px-6 py-3">Action</th>
                        </tr>
                        @foreach($reqresources as $reqresource)
                        <tr>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->id }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->user->email }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->claim_date }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_title }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_author }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_accession_number }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->created_at }}</td>
                            <td class="border border-slate-300 px-4 py-1">
                                <form action="{{ route('reqresources.destroy', $reqresource->id) }}" method="POST">
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </fieldset>
        </div>
        <script>
            // Function to hide messages after a certain time
            function hideMessage(elementId, timeout) {
                const messageElement = document.getElementById(elementId);
                if (messageElement) {
                    setTimeout(() => {
                        messageElement.classList.add('fade-out'); // Add fade-out class
                        setTimeout(() => {
                            messageElement.style.display = 'none'; // Hide after fade-out
                        }, 500); // Match this duration with the CSS transition duration
                    }, timeout);
                }
            }

            // Call the function for success and error messages
            hideMessage('success-message', 1000); // 5000 milliseconds = 5 seconds
            hideMessage('error-message', 1000); // 5000 milliseconds = 5 seconds
        </script>
    </body>
    <!-- Footer -->
    <img src="{{ asset('images/gabi_no.png') }}" alt="Mascot" class="relative absolute -bottom-52 left-1/2 transform -translate-x-1/2 w-auto h-80"> 
    <footer class="mt-20 text-center py-4 relative absolute bottom-0 w-full" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>
