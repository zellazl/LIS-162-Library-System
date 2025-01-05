<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/logo_no.png">
        <title>About Us</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

        <style>
            .about-us {
                text-align: justify;
                margin: 50px 0px 50px 50px;
                width: 60%;
            }
            .about-us p {
                font-size: 14px;
                margin-bottom: 10px;
                margin-right: 30px;
            }
            .image {
                float: right;
                width: 50%;
                margin: 0px 10px 0px 0px;
            }
            .image img {
                width: 100%;
                height: 50%;
            }
        </style>
            
    </head>
    <header class="flex items-center mt-8 mx-8">
        <a href="/" class="absolute-top"><img class="h-20 w-auto" src="images/logo_no.png" alt="Logo"></a>
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
    </header>
    <body class="font-sans bg-white text-gray-800 mt-8 ml-12">
        
        <div class="flex">
            <div class="about-us">
                <h1 class="text-5xl font-bold mb-4">ABOUT US</h1>
                <p>The library's role is to serve the needs of the faculty, students and researchers of the university. The main function is to cater to the curricular and research information needs of the constituents of the SLIS.</p>
                <p>The Library offers circulation, reserve, reference, information and reader's advisory services. The library collection is on open shelves except the reserve books, videotapes, etc.</p>
                <p>A control desk is maintained to safeguard library property. Inspection of books, packages and bags is done upon leaving the reading room. Bags must be deposited at the bag counter before entering the reading room. Presentation of a duly countersigned ID is required upon entrance to the library. The ID is non-transferable. It cannot be used by any other person.</p>              
                <p>The library collection consists mainly of books, pamphlets, journals on library and information science and other related fields, other collections such as student term papers, vertical file materials, theses, pamphlets, annual reports, UNESCO publications and newspapers are maintained to supplemnt the book and periodical collections. Books, monographs are placed on open shelves are referred to as the Circulation books. These are freely accessible to library users and may be borrowed for one week or three days depending on the demand for them.</p>
                <p>The Reserved Collection consists of textbooks and collateral materials recommended by faculty members as required reading for courses and for the shared use of all students enrolled in these courses. UNESCO publications, student reports, vertical file materials, pamphlets art available for overnight use.</p>
                <p>The Reference Collection consists of general materials such as encyclopedias, handbooks, dictionaries, bibliographies, indexes and others which fall under same category. These materials are strictly for ROOM USE ONLY. Books in this category may be taken out for reproduction purposes.</p>
                <p>Both reference and circulation books are placed on open shelves according to the Library of Congress Classification Scheme.</p>
            </div>
            <div class="justify-center align-center">
                <img src="images/logo_no.png" alt="Image">
            </div>
        </div>
    </body>
    <img src="images/gabi_no.png" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
    <footer class="mt-20 -mx-12 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>