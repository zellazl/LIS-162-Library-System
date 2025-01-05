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
                    <h1 class="mt-3 mb-5 text-2x1 font-bold text-yellow-900">Reciept</h1>
    
    <table class="mt-6 text-yellow-900 dark:text-yellow-900 leading-relaxed">
        <tr>
            <th class="border border-slate-300 px-6 py-3">Service Request ID</th>
            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
            <td class="border border-slate-300 px-6 py-3">{{ $reqservice->id }}</td>

            <th class="border border-slate-300 px-6 py-3">Type of Service</th>
            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
            <td class="border border-slate-300 px-6 py-3">{{ $reqservice->service_name }}</td>

            <th class="border border-slate-300 px-6 py-3">Date of Service</th>
            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
            <td class="border border-slate-300 px-6 py-3">{{ $reqservice->service_date }}</td>

            <th class="border border-slate-300 px-6 py-3">Timeslot</th>
            <td class="border border-slate-300 px-6 py-3">&nbsp;</td>
            <td class="border border-slate-300 px-6 py-3">{{ $reqservice->time_slot }}</td>
         </tr>
        
    </table>
    <button type="button class-0 left-0 rounded-md bg-yellow-200 hover:bg-yellow-100 px3 py-2 mt-8 text-sm font-semibold text-black text-yellow-900 object-contain">
        <a href="{{ route('reqservices.create') }}">Go to input</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>