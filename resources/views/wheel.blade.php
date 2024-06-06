<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reward Program</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Winwheel/1.2.0/Winwheel.min.js"></script>
    <style>
        .main-content {
            padding: 20px;
        }

        .wheel-container {
            text-align: center;
            margin: 20px 0;
        }

        .wheel {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
        }

        .wheel .segment {
            position: absolute;
            width: 50%;
            height: 50%;
            transform-origin: 100% 100%;
            clip-path: polygon(100% 0, 100% 100%, 0 100%);
        }

        .wheel .segment img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            position: relative;
        }

        .spin-button {
            background-color: #14b8a6;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .spin-button:hover {
            background-color: #0f766e;
        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        .sidebar {
            width: 25%;
            background-color: #d1d5db;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar img {
            width: 100%;
            margin-bottom: 20px;
        }

        .main {
            width: 70%;
        }

        .results {
            margin-top: 20px;
            background-color: #d1d5db;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Top container -->
    <div id="top-container" class="bg-gray-200 border-separator hidden sm:block">
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
                <a href="{{ route('wheel') }}" class="hover:text-gray-800">Balvu programma</a>
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
                    <a href="{{ route('login') }}" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">Login</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Register</a>
                </li>

                <li>
                    <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Jaunumi</a>
                </li>
                <li>
                    <a href="{{ route('wheel') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Balvu programma</a>
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
    <div class="main-content container mx-auto px-4 py-6">
        <div class="content">
            <div class="main">
                <div class="wheel-container">
                    <h2 class="text-2xl font-bold mb-4">ALLKEYSHOP REWARD PROGRAM</h2>
                    <p>Once a day, you can spin the wheel of fortune and have a 100% chance to win a prize.</p>
                    <div class="wheel" id="wheel" data-prize-count="{{ $prizes->count() }}">
                        @foreach ($prizes as $index => $prize)
                            <div class="segment" style="transform: rotate({{ $index * (360 / $prizes->count()) }}deg);">
                                <img src="{{ asset('storage/' . $prize->image) }}" alt="{{ $prize->name }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="button-container">
                        <button class="spin-button" id="spinButton">Spin</button>
                    </div>
                    <div class="results" id="results"></div>
                </div>
            </div>
                <!-- Sidebar content -->
                <aside class="sidebar">
                    <img src="https://path.to/your/sidebar-image.png" alt="Sidebar Image">
                    <img src="https://path.to/another/sidebar-image.png" alt="Sidebar Image">
                    <!-- Add more sidebar content as needed -->
                </aside>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-300 text-neutral-800">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4 text-center md:text-left footer-section">
                    <!-- Trustpilot Section -->
                    <!-- TrustBox script -->
                    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                    <!-- End TrustBox script -->

                    <!-- TrustBox widget - Review Collector -->
                    <div class="flex flex-col items-center text-center space-y-2">
                        <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="665a1c0ef278f22f2d472bb7" data-style-height="52px" data-style-width="100%">
                            <a href="https://www.trustpilot.com/review/api-14dprkalnins.kvalifikacija.rvt.lv" target="_blank" rel="noopener">Trustpilot</a>
                        </div>
                        <p class="text-sm text-neutral-900 font-bold">DROŠI REALIZE SAVUS SAPNI AR GOGAMES</p>
                    </div>
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

    <script>
        document.querySelector('#spinButton').addEventListener('click', function () {
            const wheel = document.querySelector('#wheel');
            const results = document.querySelector('#results');
            const prizeCount = wheel.getAttribute('data-prize-count');
            const randomDegree = Math.floor(Math.random() * 360);
            const rotation = 360 * 5 + randomDegree; // 5 full rotations + random degree
            wheel.style.transition = 'transform 5s ease-out';
            wheel.style.transform = `rotate(${rotation}deg)`;

            // Clear previous result
            results.innerHTML = '';

            // Logic to handle the result after spinning
            wheel.addEventListener('transitionend', function () {
                const actualDegree = rotation % 360;
                const prizeIndex = Math.floor((actualDegree + (360 / prizeCount) / 2) / (360 / prizeCount)) % prizeCount;
                const prizeName = @json($prizes->pluck('name'))[prizeIndex];

                results.innerHTML = `Congratulations! You won ${prizeName}`;
            }, { once: true });
        });

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>


