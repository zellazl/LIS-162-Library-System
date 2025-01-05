<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">

<body class ="bg-yellow-200">
    <title>Requests</title>
    <header class="bg-yellow-600 w-screen py-5 flex pl-5 sticky top-0 z-10">

        <div class="text-left">
            <h1 class="text-4x1 font-black italic text-white">Services</h1>
        </div>
     </header>

     <div class="py-5">
        <div class="max-w-7xl mxauto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-x1 sm:rounded lg">
                <div class="px-5 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-3 mb-5 text-2x1 font-bold text-yellow-900">All Requests</h1>
    
    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
        <tr>
            <th class="border border-slate-300 px-6 py-3">Service Request ID</th>
            <th class="border border-slate-300 px-6 py-3">Type of Service</th>
            <th class="border border-slate-300 px-6 py-3">Date of Service</th>
            <th class="border border-slate-300 px-6 py-3">Timeslot</th>
         </tr>
        @foreach($reqservices as $reqservice)
        <tr>
            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->id }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_name }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->service_date }}</td>
            <td class="border border-slate-300 px-4 py-1">{{ $reqservice->time_slot }}</td>
         </tr>
        @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>