<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
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
                    <h1 class="mt-3 mb-5 text-2xl font-bold text-yellow-900">Receipt</h1>

                    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
                        <tr>
                            <th class="border border-slate-300 px-6 py-3">Resource Request ID</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->id }}</td>

                            <th class="border border-slate-300 px-6 py-3">Full name</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->user_fullname }}</td>

                            <th class="border border-slate-300 px-6 py-3">Claim Date</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->claim_date }}</td>

                            <th class="border border-slate-300 px-6 py-3">Resource Title</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->resource_title }}</td>

                            <th class="border border-slate-300 px-6 py-3">Resource Author</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->resource_author }}</td>

                            <th class="border border-slate-300 px-6 py-3">Resource Accession Number</th>
                            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
                            <td class="border border-slate-300 px-6 py-3">{{ $reqresource->resource_accession_number }}</td>
                        </tr>
                    </table>

                    <button type="button" class="left-0 rounded-md bg-yellow-200 hover:bg-yellow-100 px-3 py-2 mt-8 text-sm font-semibold text-black text-yellow-900 object-contain">
                        <a href="{{ route('reqresources.create') }}">Go to input</a>
                    </button>
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
