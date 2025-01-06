<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo_no.png">
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
    /*::-webkit-scrollbar {
        height: 10px;
    }
    /*::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 25px;
    }
    ::-webkit-scrollbar-thumb {
        border-radius: 25px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #fddc58;
    }*/
</style>
<body>
    <header class="services">
        <a href="/home"><img class="h-20 w-auto mr-2" src="library_logo.jpg" alt="Logo"></a>
        <div>            
            <a href="/home" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
            <a href="/dashboard" class="text-sm font-bold">Student0441</a>
        </div>
    </header>
    <div class="flex flex-column gap-4 p-7">
        <section class="block basis-3/5 text-center space-y-5">
            <h1 class="text-5xl font-bold">Reservations</h1>
            <img src="images/gabi_thanksReserve.png" alt="Mascot" class="inline max-h-96 mx-1/2" />
        </section>
        <section class="block basis-1/5 text-center border-2 py-3 px-10 rounded-xl space-y-5">
            <h2 class="font-bold text-2xl">Reservation details review</h2>
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>User ID</td>
                        <td>{{ $reservation->id }}</td>
                    </tr>
                    <tr>
                        <td>User Email</td>
                        <td>{{ $reservation->user->email }}</td>
                    </tr>
                </tbody>
            </table>
            <hr />
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>Facility</td>
                        <td>{{ $reservation->facility }}</td>
                    </tr>
                    <tr>
                        <td>Timeslot</td>
                        <td>{{ $reservation->from }}-{{ $reservation->until }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ $reservation->reservation_date }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <div class="services-footer">
        <button><a href="{{ route('reservations.create') }}">GO TO INPUT</a></button>
    </div>
</body>
<footer class="bg-[#fddc58] text-center py-12 border-t border-[#e0e0e0]">
    <p class="footer-text font-bold text-black">UP School of Library and Information Science Studies Library</p>
    <p class="footer-location text-black">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
</footer>
</html>