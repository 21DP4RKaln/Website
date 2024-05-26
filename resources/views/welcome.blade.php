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
        border-bottom: 1px solid #ccc;
    }

    .footer-section {
        border-right: 1px solid #444;
    }

    .footer-section:last-child {
        border-right: none;
    }

    .hidden {
        display: none;
    }

    .product-item {
        border: 1px solid #ccc;
        padding: 16px;
        margin-bottom: 16px;
    }

    .chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #374151;
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .chat-button svg {
        margin-right: 8px;
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
                <a href="#" class="hover:text-gray-800">Balvu programma</a>
                <a href="#" class="hover:text-gray-800">Līzings</a>
                <a href="#" class="hover:text-gray-800">Garantija</a>
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
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700" href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75" href="{{ route('register') }}">
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
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Balvu programma</a>
                </li>
                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Līzings</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Garantija</a>
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
                        <!-- Product Categories -->
                        <ul id="categoryList" class="mt-6 space-y-1">
                            <li data-category="Datori">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Datori</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Personālie datori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Portatīvie datori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Planšetdatori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">E-grāmatu lasītāji</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Serveri</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Datora komponentes">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Datora komponentes</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Barošanas bloki (PSU)</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Cietie diski (HDD 2.5")</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Cietie diski (HDD 3.5")</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Cietie diski (SSD)</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Datora konfigurators">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Datora konfigurators</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Savēja Konfiguracija</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Lietotāju Konfiguracija</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Monitori/Video tehnika">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Monitori/Video tehnika</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">LCD Monitori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Projektori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Lielformāta displeji (LFD)</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Televizori</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Datoru ierīces">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Datoru ierīces</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Klaviatūras</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Peles</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Spēļu kontrolieri</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Spēļu konsoles">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Spēļu konsoles</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">PlayStation</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Xbox</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Nintendo</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Spēles">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Spēles</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Steam</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">PlayStation</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Xbox</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Nintendo</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Dator Programmatūra">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Dator Programmatūra</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Operētājsistēmas</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Biroja programmatūra</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Datu aizsardzības programmatūra</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Serveru programmatūra</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Video ierīces">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Video ierīces</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Digitālās kameras</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Webkameras</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Sporta kameras</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Audio">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Audio</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Mikrofoni</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Austiņas</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Skaļruņi</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Datortīkli">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Datortīkli</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Tīkla kartes</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Komutatori (Switch)</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Maršrutētāji</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Serveru komponentes">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Serveru komponentes</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Serveri (Brand)</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Serveru procesori</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Serveru operatīvā atmiņa</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li data-category="Aksesuāri">
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                        <span class="text-sm font-medium">Aksesuāri</span>
                                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <ul class="mt-2 space-y-1 px-4">
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Aksesuāri pelēm un klaviatūrām</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Peļu paliktņi</a></li>
                                        <li><a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Portatīvo datoru aksesuāri</a></li>
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
                    <div class="bg-white p-4 shadow product-item" data-category="Datori">
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
    <footer class="bg-gray-300 text-neutral-800">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Trustpilot Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <img src="https://www.trustpilot.com/assets/home/logos/trustpilot-logo.svg" alt="Trustpilot" class="h-12 mx-auto md:mx-0">
                    <p class="text-sm text-neutral-900 font-bold">DROŠI REALIZE SAVUS SAPNI AR GOGAMES</p>
                </div>
                <!-- Best choice for search your dream -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/shopping-cart.png" alt="Best choice for Search your dream" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-neutral-900 font-bold">LABĀKĀ IZVĒLE, LAI MEKLĒTU SAVU SAPNI</h3>
                    <p class="text-sm">Mums ir vairāk nekā 71 oficiāls partneris un pārdevēji, lai izveidotu lielāko cenu salīdzināšanas datubāzi, kas specializējas komforta meklēšanā.</p>
                </div>
                <!-- Market Best Prices Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/price-tag.png" alt="Market Best Prices" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-neutral-900 font-bold">TIRGUS LABĀKĀS CENAS</h3>
                    <p class="text-sm">Pārbaudiet, meklējiet, izvēlieties labākos piedāvājumus no mūsu plašās preču izvēles.</p>
                </div>
                <!-- Support For 24/7 Section -->
                <div class="space-y-4 text-center md:text-left footer-section">
                    <div class="flex justify-center md:justify-start">
                        <img src="https://img.icons8.com/ios/50/000000/phone-not-being-used.png" alt="Support for 24/7" class="h-12 mx-auto md:mx-0">
                    </div>
                    <h3 class="text-neutral-900 font-bold">ATBALSTS 24/7</h3>
                    <p class="text-sm">Saņemiet atbalstu jebkurā diennakts laikā. Mēs esam šeit, lai palīdzētu jums visu diennakti.</p>
                </div>
            </div>
            
            <div class="mt-8 text-center text-sm text-neutral-600">
                &copy; 2023 GoGames. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Chat Support Button -->
    <div class="chat-button" onclick="openChat()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
        <span>Help</span>
    </div>

    <script>
        function selectCategory(category) {
            // Hide all categories
            document.querySelectorAll('#categoryList details').forEach(detail => {
                if (detail.getAttribute('open') !== null) {
                    detail.removeAttribute('open');
                }
            });
            // Show the selected category
            document.querySelector(`#categoryList li[data-category="${category}"] details`).setAttribute('open', 'open');
            // Show relevant products
            document.querySelectorAll('.product-item').forEach(product => {
                product.classList.add('hidden-custom');
                if (product.getAttribute('data-category') === category) {
                    product.classList.remove('hidden-custom');
                }
            });
        }

        document.querySelectorAll('#categoryList summary').forEach(summary => {
            summary.addEventListener('click', function () {
                const category = this.parentElement.getAttribute('data-category');
                if (this.parentElement.hasAttribute('open')) {
                    // Toggle off the category and show all products
                    this.parentElement.removeAttribute('open');
                    document.querySelectorAll('.product-item').forEach(product => {
                        product.classList.remove('hidden-custom');
                    });
                } else {
                    selectCategory(category);
                }
            });
        });

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function openChat() {
            // Function to open the chat support
            alert('Chat support coming soon!');
        }
    </script>
</body>

</html>
