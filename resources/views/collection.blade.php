<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo_no.png">
    <title>UPSLIS Library Collections</title>
    <!--TailWind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</head>
<style>
    .collections {
        display: flex;
        align-items: center;
        margin: 50px;
    }
    .collections-footer {
        margin: 20px 60px;
    }
    .collections-footer button {
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
<header class="collections">
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
        <h1 class="text-5xl font-bold absolute right-12">LIBRARY COLLECTION</h1>
    </div>
</header>

<body>
<section class="container mx-auto">
    <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&filter%5B%5D=format%3A%22Book%22&type=AllFields" class="relative w-auto">
        <img src="images/book.jpeg" alt="Book" class="block mx-auto m-3.5 rounded-2xl w-full max-h-40 object-cover overflow-hidden"/>
        <h3 class="w-full absolute inset-y-16 font-bold text-2xl text-white text-center">Book</h3>
    </a>
    <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&filter%5B%5D=format%3A%22Thesis%22&type=AllFields" class="relative w-auto">
        <img src="images/thesis.jpg" alt="Thesis" class="block mx-auto m-3.5 rounded-2xl w-full max-h-40 object-cover overflow-hidden"/>
        <h3 class="w-full absolute inset-y-16 font-bold text-2xl text-white text-center">Thesis</h3>
    </a>
    <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&filter%5B%5D=format%3A%22Article%22&type=AllFields" class="relative w-auto">
        <img src="images/articles.png" alt="Articles" class="block mx-auto m-3.5 rounded-2xl w-full max-h-40 object-cover overflow-hidden"/>
        <h3 class="w-full absolute inset-y-16 font-bold text-2xl text-white text-center">Article</h3>
    </a>
    <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&filter%5B%5D=format%3A%22Continuing+Resource%22&type=AllFields" class="relative w-auto">
        <img src="images/continuing.png" alt="Continuing Resource" class="block mx-auto m-3.5 rounded-2xl w-full max-h-40 object-cover overflow-hidden"/>
        <h3 class="w-full absolute inset-y-16 font-bold text-2xl text-white text-center">Continuing Resource</h3>
    </a>
    <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&filter%5B%5D=format%3A%22Electronic+Resource%22&type=AllFields" class="relative w-auto">
        <img src="images/electronic.jpg" alt="Electronic" class="block mx-auto m-3.5 rounded-2xl w-full max-h-40 object-cover overflow-hidden"/>
        <h3 class="w-full absolute inset-y-16 font-bold text-2xl text-white text-center">Electronic Resource</h3>
    </a>
    <p class="text-lg text-right italic">Can't find the resource here? Try searching for it in <a href="https://tuklas.up.edu.ph/Search/Results?filter%5B%5D=institution%3A%22Diliman%22&filter%5B%5D=building%3A%22School+of+Library+and+Information+Studies%22&type=AllFields" class="font-bold no-underline hover:underline hover:text-amber-600">TUKLAS</a></p>
</section>
</body>
<img src="images/gabi_no.png" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
<footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
    <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
    <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
</footer>
</html>