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
                                <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Reservations</a>
                            </li>
                            <li>
                                <a href="{{ route('reqservices.create') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Facility Requests</a>
                            </li>
                            <li>
                                <a href="{{ route('reqresources.create') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Resource Requests</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Statistics</a>
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
            <fieldset>
                <input id="reservations" class="peer/reservations" type="radio" name="status" checked />
                <label for="reservations" class="peer-checked/reservations:text-amber-800 mr-4">Reservations</label>
              
                <input id="facilityreq" class="peer/facilityreq" type="radio" name="status" />
                <label for="facilityreq" class="peer-checked/facilityreq:text-amber-800 mr-4">Facility</label>

                <input id="resourcereq" class="peer/resourcereq" type="radio" name="status" />
                <label for="resourcereq" class="peer-checked/resourcereq:text-amber-800 mr-4">Resource</label>
              
                <div class="hidden peer-checked/reservations:block">
                    <table>
                        <thead class="bg-amber-200">
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Facility</th>
                                <th>Reservation Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>1</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>2</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>3</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>3</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>3</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>3</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-amber-100">
                                <td>3</td>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                <td>Confirm</td>
                            </tr>
            
                        </tbody>
                    </table>
                </div>
                <div class="hidden peer-checked/facilityreq:block">
                    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
                        <tr>
                            <th class="border border-slate-300 px-6 py-3">Service Request ID</th>
                            <th class="border border-slate-300 px-6 py-3">Email</th>
                            <th class="border border-slate-300 px-6 py-3">Type of Service</th>
                            <th class="border border-slate-300 px-6 py-3">Date of Service</th>
                            <th class="border border-slate-300 px-6 py-3">Timeslot</th>
                            <th class="border border-slate-300 px-6 py-3">Transaction Status</th>
                        </tr>
                        @foreach($reqservices as $reqservice)
                        <tr>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->id }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reservation->user->email }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_name }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_date }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->time_slot }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->transaction_status }}</td>
                            <td>
                                 <form action="{{ route('admins.destroy', $reqservice->id) }}" method="POST">
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
                            <th class="border border-slate-300 px-6 py-3">Transaction Status</th>
                        </tr>
                        @foreach($reqresources as $reqresource)
                        <tr>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->id }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->->user->email }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->claim_date }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_title }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_author }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->resource_accession_number }}</td>
                            <td class="border border-slate-300 px-4 py-1">{{ $reqresource->transaction_status }}</td>
                            <td>
                                <form action="{{ route('admins.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </fieldset>
        </div>
    </body>
    <!-- Footer -->
    <img src="{{ asset('images/gabi_no.png') }}" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
    <footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>
