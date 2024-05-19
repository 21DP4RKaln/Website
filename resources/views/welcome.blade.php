<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GoGames</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
</head>

<style>
    .hidden-custom {
        display: none;
    }

    .border-separator {
        border-bottom: 1px solid #ccc; /* Change the color as needed */
    }
    .footer-section {
        border-right: 1px solid #444;
    }
    .footer-section:last-child {
        border-right: none;
    }
</style>

<body class="bg-gray-100">
    <!-- Top container -->
    <div id="top-container" class="bg-gray-200 border-separator">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center text-sm text-gray-600">
            <div>
                <a href="#" class="hover:text-gray-800">RUS</a> | 
                <a href="#" class="hover:text-gray-800">ENG</a>
            </div>
            <div>
                Tāl: 64627387 gsm 26077632 (p.o.t.c.p. 9:00-18:00)
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-800">Jaunumi</a>
                <a href="#" class="hover:text-gray-800">Līzings</a>
                <a href="#" class="hover:text-gray-800">Garantija</a>
                <a href="#" class="hover:text-gray-800">Piegāde</a>
                <a href="#" class="hover:text-gray-800">Kontakti</a>
            </div>
        </div>
    </div>

    <header class="bg-neutral-200 border-separator">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Logo -->
                <a href="/" class="text-black dark:text-black text-3xl tracking-wider font-bold">
                    <span class="block sm:hidden">GG</span>
                    <span class="hidden sm:block">GoGames</span>
                </a>
                <div class="flex-grow flex items-center justify-center">
                    <div class="relative w-full max-w-lg">
                        <label for="Search" class="sr-only">Search</label>
                        <input type="text" id="Search" placeholder="Search for..." class="w-full rounded-md border-gray-200 py-2.5 pl-4 pr-10 shadow-sm sm:text-sm">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center justify-center px-3">
                            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/icons/search.svg" alt="Search" class="h-4 w-4 text-gray-600 hover:text-gray-700">
                        </button>
                    </div>
                </div>
                <div class="flex items-center gap-4 hidden sm:flex">
                    <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700" href="#">
                        Login
                    </a>
                    <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75" href="#">
                        Register
                    </a>
                </div>
                <button class="sm:hidden p-2 text-gray-600 hover:text-gray-700" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="px-4 py-2 hidden sm:hidden">
            <ul class="space-y-1">
                <li>
                    <a href="#" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">Login</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Register</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Jaunumi</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Līzings</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Garantija</a>
                </li>
                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Piegāde</a>
                </li>
                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Kontakti</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        <div class="flex">
            <aside id="sidebar" class="w-1/4 bg-white p-4 shadow hidden lg:block">
                <div class="flex h-screen flex-col justify-between border-e bg-white">
                    <div class="px-4 py-6">
                        <ul class="mt-6 space-y-1">
                            <li>
                                <a href="#" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">General</a>
                            </li>
                            <li>
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Teams</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li>
                                            <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Banned Users</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Calendar</a>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Billing</a>
                            </li>
                            <li>
                                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Invoices</a>
                            </li>
                            <li>
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Account</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li>
                                            <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Details</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Security</a>
                                        </li>
                                        <li>
                                            <form action="#">
                                                <button type="submit" class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700">
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div class="w-full lg:w-3/4 lg:ml-4">
                <div class="bg-white p-4 shadow">
                    <img src="/path/to/your/image.png" alt="Main Banner" class="w-full h-64 object-cover">
                    <!-- Add more content as necessary -->
                </div>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Example of a product item -->
                    <div class="bg-white p-4 shadow">
                        <img src="/path/to/product/image.png" alt="Product" class="w-full h-32 object-cover">
                        <h3 class="mt-2 text-lg font-bold">Product Name</h3>
                        <p class="text-gray-700">$100.00</p>
                    </div>
                    <!-- Add more product items as necessary -->
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Trustpilot Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <img src="https://www.trustpilot.com/assets/home/logos/trustpilot-logo.svg" alt="Trustpilot" class="h-12 mx-auto md:mx-0">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Trustpilot_star.png" alt="Stars" class="h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Trustpilot_star.png" alt="Stars" class="h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Trustpilot_star.png" alt="Stars" class="h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Trustpilot_star.png" alt="Stars" class="h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Trustpilot_star.png" alt="Stars" class="h-6">
                    </div>
                    <p class="text-sm">1111 Reviews</p>
                    <p class="text-sm">CHOOSE YOUR SHOPS SAFELY WITH ALLKEYSHOP</p>
                </div>
                <!-- Official and Keysellers Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/shopping-cart.png" alt="Official and Keysellers" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-white font-bold">OFFICIAL AND KEYSELLERS</h3>
                    <p class="text-sm">We have selected more than 71 official dealers and keysellers to create the largest price comparison database specialized in video games.</p>
                </div>
                <!-- Market Best Prices Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/price-tag.png" alt="Market Best Prices" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-white font-bold">MARKET BEST PRICES</h3>
                    <p class="text-sm">With 159697 games, we strive to find and maintain the best prices. Explore our accurate listings and use coupons to maximize your savings.</p>
                </div>
                <!-- Buyer Protection Section -->
                <div class="space-y-4 text-center md:text-left">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/shield.png" alt="Buyer Protection" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-white font-bold">BUYER PROTECTION</h3>
                    <p class="text-sm">At Allkeyshop you are our priority. Therefore it is important that you always get the product you bought in the proper timeframe.</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                    <!-- Need Help Section -->
                    <div class="space-y-4 text-center md:text-left footer-section">
                        <h3 class="text-white font-bold">NEED HELP ?</h3>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-white">About Us ?</a></li>
                            <li><a href="#" class="hover:text-white">How Allkeyshop works ?</a></li>
                            <li><a href="#" class="hover:text-white">Why are prices so low?</a></li>
                            <li><a href="#" class="hover:text-white">The key I bought doesn’t work ?</a></li>
                            <li><a href="#" class="hover:text-white">How to activate your CDKey ?</a></li>
                            <li><a href="#" class="hover:text-white">FAQs ?</a></li>
                            <li><a href="#" class="hover:text-white">Allkeyshop Extension ?</a></li>
                        </ul>
                    </div>
                    <!-- Partnership Section -->
                    <div class="space-y-4 text-center md:text-left footer-section">
                        <h3 class="text-white font-bold">PARTNERSHIP</h3>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-white">Twitch/Kick</a></li>
                            <li><a href="#" class="hover:text-white">Website</a></li>
                            <li><a href="#" class="hover:text-white">Youtube</a></li>
                            <li><a href="#" class="hover:text-white">Merchants</a></li>
                        </ul>
                    </div>
                    <!-- Categories Section -->
                    <div class="space-y-4 text-center md:text-left footer-section">
                        <h3 class="text-white font-bold">CATEGORIES</h3>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-white">PC</a></li>
                            <li><a href="#" class="hover:text-white">Xbox</a></li>
                            <li><a href="#" class="hover:text-white">Playstation</a></li>
                            <li><a href="#" class="hover:text-white">Nintendo</a></li>
                            <li><a href="#" class="hover:text-white">Reward Program</a></li>
                            <li><a href="#" class="hover:text-white">Gift Cards</a></li>
                            <li><a href="#" class="hover:text-white">Deals / Free</a></li>
                            <li><a href="#" class="hover:text-white">Store Reviews</a></li>
                            <li><a href="#" class="hover:text-white">Top Games 2024</a></li>
                            <li><a href="#" class="hover:text-white">AKS Merch USA</a></li>
                            <li><a href="#" class="hover:text-white">AKS Merch EUROPE</a></li>
                        </ul>
                    </div>
                    <!-- Newsletter Section -->
                    <div class="space-y-4 text-center md:text-left">
                        <h3 class="text-white font-bold">NEWSLETTER</h3>
                        <form class="flex space-x-2">
                            <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-gray-700 focus:border-white focus:ring-2 focus:ring-white">
                            <button class="px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white">Subscribe</button>
                        </form>
                        <p class="text-xs">Subscribe to the Allkeyshop's newsletter and get the Best Deals, Free Game and Coupons.</p>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <p>Terms of Service - Privacy Policy Allkeyshop.com - Contact Us - Career - Allkeyshop Foundation - Copyright © 2024 Allkeyshop</p>
                    <div class="mt-4 flex justify-center space-x-4">
                        <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Font Awesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
        function handleResize() {
            const topContainer = document.getElementById('top-container');
            if (window.innerWidth < 1060) {  // Adjust the width as needed
                topContainer.classList.add('hidden-custom');
            } else {
                topContainer.classList.remove('hidden-custom');
            }
        }

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        window.addEventListener('resize', handleResize);
        window.addEventListener('load', handleResize);
    </script>
</body>
</html>

