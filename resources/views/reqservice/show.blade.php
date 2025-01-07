<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>UPSLIS Library Services</title>
    <!--TailWind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .services {
        display: flex;
        align-items: center;
        margin: 50px;
    }
    .services-footer {
        margin: 20px 60px;
    }
    .services-footer button {
        font-size: 14px;
        background-color: #fddc58;
        border: none;
        padding: 15px 32px;
        cursor: pointer;
        border-radius: 8px;
        display: inline;
        justify-content: center;
        align-items: center;
    }
    section button {
        font-size: 21px;
        color: white;
        background-color: #e5c53f;
        border: none;
        padding: 15px 32px;
        cursor: pointer;
        border-radius: 8px;
        display: inline;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <header class="services">
        <a href="/"><img class="h-20 w-auto mr-2" src="{{ asset('images/logo_no.png') }}" alt="Logo"></a>
        <div>            
            <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
            <a href="/dashboard" class="text-sm font-bold">Dashboard</a>
        </div>
    </header>
    <div class="flex flex-column gap-4 p-7">
        <section class="block basis-3/5 text-center space-y-5">
            <h1 class="text-5xl font-bold">Requests</h1>
            <img src="{{ asset('images/gabi_thanksRequest.png') }}" alt="Mascot" class="inline max-h-96 mx-1/2" />
        </section>
        <section class="block basis-1/3 text-center border-2 py-3 px-10 rounded-xl space-y-5">
            <h2 class="font-bold text-2xl">Request details review</h2>
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>Request ID</td>
                        <td>{{ $reqservice->id }}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $reqservice->user_fullname }}</td>
                    </tr>
                </tbody>
            </table>
            <hr />
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>Date</td>
                        <td>{{ $reqservice->service_date }}</td>
                    </tr>
                    <tr>
                        <td>Service</td>
                        <td>{{ $reqservice->service_name }}</td>
                    </tr>
                    <tr>
                        <td>Timeslot</td>
                        <td>{{ $reqservice->time_slot }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <div class="grid grid-cols-1 gap-4 place-items-center">
        <button type="button" class="rounded-md bg-[#fddc58] hover:bg-[#ffcc00] px-3 py-2 mt-8 text-sm font-semibold text-black">
            <a href="{{ route('reqservices.create') }}">Make another request</a>
        </button>
    </div>
</body>
<footer class="mt-20 text-center py-4 relative" style='background-color: #fddc58'>
    <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
    <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
</footer>
</html>
