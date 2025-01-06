<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Room Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</head>

<body class="bg-yellow-200">
    <header class="services flex items-center space-x-4 pl-10 mt-4">
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
            <div class="relative bg-transparent overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">

                    <h1 class="mt-3 mb-5 text-2xl font-bold font-mono text-yellow-900">Request a service here:</h1>

                    <form action="{{ route('reqresources.index') }}" method="post">
                        @csrf

                        <div class="col-span-full">
                            <label for="user_fullname" class="block text-sm/6 font-mono font-medium italic text-yellow-900">
                                Please input your name as follows: LAST NAME, Given MI.
                            </label>
                            <div class="mt-2">
                                <input type="string" name="user_fullname" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="claim_date" class="block text-sm/6 font-mono font-medium italic text-yellow-900">
                                When would you like to claim your resource?
                            </label>
                            <div class="mt-2">
                                <input type="date" name="claim_date" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="resource_title" class="block text-sm/6 font-mono font-medium italic text-yellow-900">
                                Please input the full title of the resource.
                            </label>
                            <div class="mt-2">
                                <input type="string" name="resource_title" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="resource_author" class="block text-sm/6 font-mono font-medium italic text-yellow-900">
                                Please input the name/s of the author/s as follows: LAST NAME, Given MI.
                            </label>
                            <div class="mt-2">
                                <input type="string" name="resource_author" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="resource_accession_number" class="block text-sm/6 font-mono font-medium italic text-yellow-900">
                                Please input the accession number.
                            </label>
                            <div class="mt-2">
                                <input type="string" name="resource_accession_number" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="rounded-md bg-yellow-900 px-3 py-2 text-sm font-mono text-white shadow-sm hover:bg-yellow-600">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="/collections" class="text-xl font-bold text-yellow-900 hover:text-yellow-600">Go to Collections</a>
    </div>

    <footer class="mt-20 text-center py-4 relative" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</body>

</html>
