<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo_no.png">
    <title>UPSLIS Library Services</title>
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
            <h1 class="text-5xl font-bold">Requests</h1>
            <img src="gabi_thanksRequest.png" alt="Mascot" class="inline max-h-96 mx-1/2"/>
        </section>
        <section class="block basis-1/5 text-center border-2 py-3 px-10 rounded-xl space-y-5">
            <h2 class="font-bold text-2xl">Request details review</h2>
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>Resource Request ID</td>
                        <td>{{ $reqresource->id }}</td>
                    </tr>
                    <tr>
                        <td>Full name</td>
                        <td>{{ $reqresource->user_fullname }}</td>
                    </tr>
                    <tr>
                        <td>Claim date</td>
                        <td>{{ $reqresource->claim_date }}</td>
                    </tr>
                </tbody>
            </table>
            <hr />
            <h3 class="font-bold">Resource</h3>
            <table class="w-full table-fixed">
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td>{{ $reqresource->resource_title }}</td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td>{{ $reqresource->resource_author }}</td>
                    </tr>
                    <tr>
                        <td>Accession no.</td>
                        <td>{{ $reqresource->resource_accession_number }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
		<button type="button class-0 left-0 rounded-md bg-yellow-200 hover:bg-yellow-100 px3 py-2 mt-8 text-sm font-semibold text-black text-yellow-900 object-contain">
        <a href="{{ route('reqresources.create') }}">Go to input</a>
		</button>
    </div>
</body>
<footer class="bg-[#fddc58] text-center py-12 border-t border-[#e0e0e0]">
    <p class="footer-text font-bold text-black">UP School of Library and Information Science Studies Library</p>
    <p class="footer-location text-black">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
</footer>
</html>