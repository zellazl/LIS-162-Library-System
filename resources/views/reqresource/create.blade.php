<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Room Index</title>
</head>

<body class="bg-yellow-200">
    <header class="services flex items-center space-x-4 pl-10">
        <a href="/home" class="flex-shrink-0">
            <img class="h-20 w-auto" src="images/logo_no.png" alt="Logo">
        </a>
        <div>
            <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY</a>
            <nav class="flex space-x-8 mt-2 text-sm font-bold">
                <a href="/" class="hover:text-amber-600">Home</a>
                <a href="/about_us" class="hover:text-amber-600">About Us</a>
                <a href="/contact_us" class="hover:text-amber-600">Contact Us</a>
                
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-bold text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-amber-600 md:me-0 dark:text-black" type="button">
                    <span class="hover:text-amber-600">Services</span>
                </button>
                <div id="dropdownAvatarName" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white dark:divide-gray">
                    <ul class="py-2 text-sm text-black dark:text-black" aria-labelledby="dropdownUserAvatarNameButton">
                        <li>
                            <a href="/services" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Services</a>
                        </li>
                        <li>
                            <a href="/collection" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Collection</a>
                        </li>
                        <li>
                            <a href="/resources" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Resources</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="py-5"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-3 mb-5 text-2xl font-bold font-mono text-yellow-900">Request a service here:</h1>

                    <a href="/collection" class="block text-center bg-yellow-600 text-white text-xl font-bold py-2 px-4 rounded hover:bg-yellow-500">
                        Collections
                    </a>

                    <form action="{{ route('reqresources.index') }}" method="post">
                        @csrf

                        <div class="col-span-full">
                            <label for="user_fullname" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input your name as follows: LAST NAME, Given MI.</label>
                            <div class="mt-2">
                                <input type="string" name="user_fullname" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                            </div>

                            <div class="col-span-full">
                                <label for="claim_date" class="block text-sm/6 font-mono font-medium italic text-yellow-900">When would you like to claim your resource?</label>
                                <div class="mt-2">
                                    <input type="date" name="claim_date" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                </div>

                                <div class="col-span-full">
                                    <label for="resource_title" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input the full title of the resource.</label>
                                    <div class="mt-2">
                                        <input type="string" name="resource_title" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                    </div>

                                    <div class="col-span-full"></div>
                                    <label for="resource_author" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input the name/s of the author/s as follows: LAST NAME, Given MI.</label>
                                    <div class="mt-2">
                                        <input type="string" name="resource_author" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                    </div>

                                    <div class="col-span-full"></div>
                                    <label for="resource_accession_number" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input the accession number.</label>
                                    <div class="mt-2">
                                        <input type="string" name="resource_accession_number" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                    </div>

                                    <div class="mt-6">
                                        <button type="submit" class="rounded-md bg-yellow-900 px-3 py-2 text-sm font-mono text-white shadow-sm hover:bg-yellow-600">Save</button>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-20 text-center py-4 relative" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</body>

</html>
