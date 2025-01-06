<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">

<body class ="bg-yellow-200">

<title>Room Index</title>

<header class="bg-yellow-600 w-screen py-5 flex pl-5 sticky top-0 z-10"> 
   
    <div class ="text-left"> 
        <h1 class = "text-4xl font-black italic text-white">Services</h1>
    </div>
</header>

<div class="py-5"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="relative bg-transparent overflow-hidden shadow-xl sm:rounded-lg">
    
                 <div class="px-5 lg:p-8 bg-white border-b border-gray-200">

        <h1 class="mt-3 mb-5 text-2xl font-bold font-mono text-yellow-900">Request a service here:</h1>

        <form action="{{ route('reqservices.index') }}" method="post">
         @csrf

         <div class="col-span-full">
         <label for="user_fullname" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input your name as follows: LAST NAME, Given MI.</label>
         <div class="mt-2">
             <input type="string" name="user_fullname" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
         </div>

         <div class="col-span-full">
         <label for="service_date" class="block text-sm/6 font-mono font-medium italic text-yellow-900">When would you like your appointment?</label>
         <div class="mt-2">
             <input type="date" name="service_date" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
         </div>

         <div class="col-span-full">
         <label for="time_slot" class="block text-sm/6 font-mono font-medium italic text-yellow-900">Please input your time of appointment.</label>
         <div class="mt-2">
             <input type="string" name="time_slot" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
         </div>

         <div class="col-span-full"></div>
         <label for="service_name" class="block text-sm/6 font-mono font-medium italic text-yellow-900">What service will you avail?</label>
         <div class="mt-2">
             <input type="string" name="service_name" id="" class="block w-full rounded-md border-0 pl-2 px-3 py-5 text-base font-mono font-medium text-yellow-900 shadow-sm ring-1 ring-inset ring-gray-300">
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
</body>
</html>
