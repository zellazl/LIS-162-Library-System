<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo_no.png">
    <title>UPSLIS Library Resources</title>
    <!--TailWind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</head>
<style>
    .resources {
        display: flex;
        align-items: center;
        margin: 50px;
    }
    .resources-footer {
        margin: 20px 60px;
    }
    .resources-footer button {
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
</style>
<header class="flex items-center mx-12 mt-8 mb-32">
    <a href="/"><img class="h-20 w-auto mr-2" src="images/logo_no.png" alt="Logo"></a>
    <div>            
        <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
        <nav class="flex space-x-8 mt-2 text-sm font-bold">
            <a href="/" class="hover:text-amber-600">Home</a>
            <a href="/about_us" class="hover:text-amber-600">About Us</a>
            <a href="/contact_us" class="hover:text-amber-600">Contact Us</a>
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-bold text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-amber-600 md:me-0 dark:text-black" type="button">
                <a class="hover:text-amber-600">Services</a>
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
        <h1 class="text-5xl font-bold absolute right-12">ONLINE RESOURCES</h1>
    </div>
</header>
<body>
    <div class="mx-auto flex text-center">
        <div class="block space-y-4 flex-initial basis-1/2">
            <img src="images/tuklas.png" alt="Placeholder image" class="bg-blue-100 block mx-auto m-3.5 rounded-2xl max-w-sm"/>
            <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&type=AllFields" class="text-center font-bold text-lg">UP SLIS Library Collection</a>
            
        </div>
        <div class="block space-y-4 flex-initial basis-1/2">
            <img src="images/digitalarchives.png" alt="Placeholder image" class="bg-blue-100 block mx-auto m-3.5 rounded-2xl max-w-sm"/>
            <a href="https://digitalarchives.upd.edu.ph/collection/12" class="text-center font-bold text-lg">UP SLIS Library e-Theses Collection</a>
            
        </div>
    </div>
    <div class="mx-auto flex text-center">
        <div class="block space-y-4 flex-initial basis-1/2">
            <img src="images/openathens.png" alt="Placeholder image" class="bg-blue-100 block mx-auto m-3.5 rounded-2xl max-w-sm"/>
            <a href="https://mainlib.upd.edu.ph/openathens/" class="text-center font-bold text-lg">UPD OpenAthens</a>
            
        </div>
        <div class="block space-y-4 flex-initial basis-1/2">
            <img src="images/onlinesub.png" alt="Placeholder image" class="bg-blue-100 block mx-auto m-3.5 rounded-2xl max-w-sm"/>
            <a href="https://mainlib.upd.edu.ph/online-subscriptions/" class="text-center font-bold text-lg">UPD ONLINE SUBSCRIPTIONS</a>
            
        </div>
    </div>
    </body>
    <img src="images/gabi_no.png" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
    <footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>