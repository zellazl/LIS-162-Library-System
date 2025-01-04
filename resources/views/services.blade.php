<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo_no.png">
    <title>Services</title>
    <!--TailWind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
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
    .container {    
        display: flex;
        gap: 24px;
        border-radius: 12px;
        padding: 30px;
        scroll-snap-type: x mandatory;
        overflow-x: auto;
        scroll-padding: 30px;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        margin: 50px 50px 0px;
        max-height: auto;
        justify-self: center;
    }
    .container .card {
        width: auto;
        align-items: center;
        padding: 20px;
        border-radius: 12px;
        background: #fddc58;  /* or #fff */
        scroll-snap-align: start;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }
    .card .image {
        height: 150px;
        width: 150px;
        padding: 4px;
        background: #fddc58;
        border-radius: 10%;
    }
    .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 10%;
    }
    .card h2 {
        margin-top: 25px;
        color: #333;
        font-size: 20px;
        font-weight: 600;
        text-align: center
    }
    .card p {
        margin-top: 4px;
        font-size: 16px;
        font-weight: 400;
        color: #333;
        text-align: center;
    }
</style>
<body>
    <header class="services">
        <a href="/home"><img class="h-20 w-auto mr-2" src="images/logo_no.png" alt="Logo"></a>
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
        </div>
        <h1 class="text-5xl font-bold absolute right-12">SERVICES</h1>
    </header>
    
    <div class="container">
        <div class="card">
            <div class="image">
            <img src="images/closed_shelves.png" alt=""/>
            </div>
            <h2>CLOSED SHELVES POLICY</h2>
            <p class="text-balance">Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/reading_spaces.png" alt="">
            </div>
            <h2>READING SPACES</h2>
            <p class="text-balance">12 Carrels reserved at the College of Science Library Bldg. Hallway for UP SLIS Library users</p>
            <p style="font-size: 12px">First come, first served</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/opac.png" alt="" />
            </div>
            <h2>LIBRARY OPAC</h2>
            <p class="text-balance">Can access the online public access catalog on a designated desktop</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="images/orientation.png" alt="" />
            </div>
            <h2>LIBRARY ORIENTATION</h2>
            <p class="text-balance">Introduces and guides the users on the library resources, programs, and services offered by the library</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="images/counsel.png" alt="" />
            </div>
            <h2>TERM PAPER AND RESEARCH COUNSELING</h2>
            <p class="text-balance">An attempt to guide and provide student's immediate research needs</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="images/news.png" alt="" />
            </div>
            <h2>NEWSPAPERS</h2>
            <p class="text-balance">Available newspapers include The Philippine Star, The Manila Bulletin, and Philippine Daily Inquirer</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="images/advisory.png" alt="" />
            </div>
            <h2>READER ADVISORY</h2>
            <p class="text-balance">Providing guidance to users about what materials they might enjoy</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/laminate.png" alt="" />
            </div>
            <h2>LAMINATION</h2>
            <p class="text-balance">*Depends on the size</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/charging.png" alt="" />
            </div>
            <h2>LAPTOP CHARGING</h2>
            <p class="text-balance">First come, first served at no cost</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/scanning.png" alt="" />
            </div>
            <h2>SCANNING</h2>
            <p class="text-balance">Php 5 per page or image</p>
        </div>
        <div class="card">
            <div class="image">
            <img src="images/printing.png" alt="" />
            </div>
            <h2>PRINTING</h2>
            <p class="text-balance">Black and white (Php 5 per page)</p>
            <p class="text-balance">Colored</p>
            <p>(Php 5-20 per page)</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="images/desktop.png" alt="" />
            </div>
            <h2>AVAILABLE DESKTOP</h2>
            <p class="text-balance">For encoding and internet use</p>
        </div>
    </div>
</body>
<img src="images/gabi_no.png" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
    <footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>