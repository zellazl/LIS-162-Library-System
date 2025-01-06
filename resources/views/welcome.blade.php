<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/logo_no.png">
        <title>UP SLIS Library</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans bg-white text-gray-800">
    
    <!-- Welcome Header -->
        <header class="flex relative w-full max-w-2xl px-12 lg:max-w-7xl grid grid-cols-1 items-center gap-2 py-5 lg:grid-cols-1">
            <!-- Will work sa Laravel -->
            @if (Route::has('login'))
                <nav class="justify-start px-6 mt-4">
                    @auth
                        <a class="text-base font-bold rounded-md px-3 py-2 text-black">
                            Welcome!<br></a>
                        <a
                            href="{{ auth()->user()->role === 'admin' ? url('/admin/dashboard') : url('/dashboard') }}"
                            class="text-base font-bold rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-amber-600/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-amber-600/80 dark:focus-visible:ring-black"
                        >
                            
                            {{ auth()->user()->name }}
                            
                        </a>
                        <div class="relative bg-amber-100">
                            <div class="absolute -top-8 right-0">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-sm font-bold w-full px-4 dark:hover:text-amber-600/70">
                                        Log out
                                    </button>
                                </form>
                            </div>
                        </div>

                        
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-black"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            <!-- Main Header -->
            <div class="text-center">
                <div class="flex justify-center lg:col-start-2">
                  <a href="/" class="absolute-top"><img class="h-28 w-auto mr-2" src="images/logo_no.png" alt="Logo"></a>
                </div>
                <h1 class="text-7xl font-bold text-amber-800 mt-4">UP SLIS LIBRARY</h1>
                <nav class="flex text-center justify-center space-x-24 mt-4 text-xl font-bold">
                    <a href="/about_us" class="hover:text-amber-600">About Us</a>
                    <a href="/contact_us" class="hover:text-amber-600">Contact Us</a>
                    <a href="/services" class="hover:text-amber-600">Services</a>
                </nav>
            </div>
        </header>

        <!-- Search Bar -->
        <div class="flex justify-center mt-6">
            <div class="relative w-64">
                <input type="text" placeholder="Under Maintenance" class="w-full border border-gray-300 rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-600">
                <span class="absolute top-2 left-3 text-gray-400">
                🔍 <!-- Search Icon -->
                </span>
            </div>
        </div>

        <!-- New Features Section -->
        <section class="mt-12 px-6 mx-12">
            <h2 class="text-lg font-bold text-amber-800">NEW FEATURES</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
                <!-- Card 1 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/f1.jpg"><img src="images/f1.jpg" alt="Feature 1" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/19qhaXhBij/"><p class="mt-4 text-sm font-semibold">#WellnessWednesday</p></a>
                </div>
                <!-- Card 2 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                      <a href="images/f2.jpg"><img src="images/f2.jpg" alt="Feature 2" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/1DoaYGMg5r/"><p class="mt-4 text-sm font-semibold">Welcome 2025</p></a>
                </div>
                <!-- Card 3 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/f3.jpg"><img src="images/f3.jpg" alt="Feature 3" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/1Q16sYwUx5/"><p class="mt-4 text-sm font-semibold">Happy Holidays!</p></a>
                </div>
            </div>
        </section>

        <!-- Announcements Section -->
        <section class="mt-12 px-6 mx-12">
            <h2 class="text-lg font-bold text-amber-800">ANNOUNCEMENTS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
                <!-- Card 1 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/a1.jpg"><img src="images/a1.jpg" alt="Feature 1" class="h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/15obdpq44X/"><p class="mt-4 text-sm font-semibold">Congratulations, Ma'am Jessie!</p></a>
                </div>
                <!-- Card 2 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                      <a href="images/a2.jpg"><img src="images/a2.jpg" alt="Feature 2" class="h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/15kY5RosGB/"><p class="mt-4 text-sm font-semibold">Service Advisory</p></a>
                </div>
                <!-- Card 3 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/a3.jpg"><img src="images/a3.jpg" alt="Feature 3" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/UPSLISLib/posts/pfbid0GRNahtT6Jke6TSR5upVp5Mshka4shYZ2f8YEspJPvFajcbGyxyHU4qce8PcyMWZGl"><p class="mt-4 text-sm font-semibold">Sorry beshies!</p></a>
                </div>
            </div>
        </section>

        <!-- New Arrivals Section -->
        <section class="mt-12 px-6 mx-12">
            <h2 class="text-lg font-bold text-amber-800">NEW ARRIVALS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
                <!-- Card 1 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/na1.jpg"><img src="images/na1.jpg" alt="Feature 1" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/15noB9FbE3/"><p class="mt-4 text-sm font-semibold">Feature MondYAY</p></a>
                </div>
                <!-- Card 2 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                      <a href="images/na2.jpg"><img src="images/na2.jpg" alt="Feature 2" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/14USs4ApaN/"><p class="mt-4 text-sm font-semibold">December 2024</p></a>
                </div>
                <!-- Card 3 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-lg flex items-center justify-center">
                        <a href="images/na3.jpg"><img src="images/na3.jpg" alt="Feature 3" class="w-full h-96"></a>
                    </div>
                    <a href="https://www.facebook.com/share/p/15NoX5JcXK/"><p class="mt-4 text-sm font-semibold">Feature MondYAY</p></a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <img src="images/gabi_no.png" alt="Mascot" class="absolute left-1/2 transform -translate-x-1/2 w-auto h-80"> 
        <footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
            <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
            <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
        </footer>
    </body>
</html>
