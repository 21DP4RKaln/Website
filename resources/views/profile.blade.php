<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <style>
        body {
            color: #0a0a0a;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
            border: 2px solid #0a0a0a;
        }

        .profile-info {
            flex-grow: 1;
        }

        .profile-info h1 {
            font-size: 24px;
            margin: 0;
        }

        .profile-info p {
            margin: 5px 0;
            color: #0a0a0a;
        }

        .profile-level h2 {
            margin: 0;
        }

        .sidebar {
            background-color: #d1d5db;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .sidebar .section-title {
            color: #14b8a6;
        }

        .sidebar p {
            color: #0a0a0a;
        }

        .selling-items,
        .comments-section {
            background-color: #d1d5db;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .selling-items .item,
        .comments-section .comment {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .selling-items .item img,
        .comments-section .comment img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .selling-items .item div,
        .comments-section .comment div {
            flex-grow: 1;
        }

        .comments-section textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            resize: none;
            height: 100px;
            margin-bottom: 10px;
        }

        .comments-section button {
            background-color: #14b8a6;
            color: #d1d5db;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .comments-section button:hover {
            background-color: #14b8a6;
        }

        .footer-section {
            border-right: 1px solid #444;
        }

        .footer-section:last-child {
            border-right: none;
        }

        .product-item {
            border: 1px solid #d4d4d8;
            padding: 16px;
            margin-bottom: 16px;
        }

    </style>
</head>

<body>
    <header class="bg-gray-300 border-separator">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Logo -->
                <a href="/" class="text-black dark:text-black text-3xl tracking-wider font-bold">
                    <span class="block sm:hidden">GG</span>
                    <span class="hidden sm:block">GoGames</span>
                </a>
                <div class="flex items-center gap-4 hidden sm:flex">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700" href="{{ route('welcome') }}">
                            Return
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="rounded-md bg-red-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-red-700">
                                Log out
                            </button>
                        </form>
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
                    <a href="{{ route('welcome') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-700">Return</a>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-700">Edit Profile</a>
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

    <div class="container">
        <div class="profile-header">
            <img src="path_to_profile_picture.jpg" alt="Profile Picture" class="profile-avatar">
            <div class="profile-info">
                <h1>{{ $user->nickname }}</h1>
            </div>
            <div class="flex items-center gap-4 hidden sm:flex">
                <a class="rounded-md bg-gray-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-gray-700" href="{{ route('home') }}">
                    Edit Profile
                </a>
            </div>
        </div>

        <div class="sidebar">
            <h3 class="section-title">Account created</h3>
            <p>{{ $user->created_at->format('d M Y') }}</p>
            <h3 class="section-title">Account number</h3>
            <p>{{ $user->account_number }}</p>
            <h3 class="section-title">Profile Awards</h3>
            <p></p>
            <h3 class="section-title">Purchase</h3>
            <p></p>
        </div>

        <div class="selling-items">
            <h3 class="section-title">Selling Items</h3>
            <div class="bg-white p-4 shadow product-item" category="UserSale">
                <img src="/path/to/Item/image.png" alt="Item" class="w-10 h-10 object-cover">
                    <h3 class="mt-2 text-lg font-bold">Item Name</h3>
                <p class="text-gray-700">Price: $10</p>
            </div>
            <div class="bg-white p-4 shadow product-item" category="UserSale">
                <img src="/path/to/Item/image.png" alt="Item" class="w-10 h-10 object-cover">
                    <h3 class="mt-2 text-lg font-bold">Item Name</h3>
                <p class="text-gray-700">Price: $20</p>
            </div>
            <div class="bg-white p-4 shadow product-item" category="UserSale">
                <img src="/path/to/Item/image.png" alt="Item" class="w-10 h-10 object-cover">
                    <h3 class="mt-2 text-lg font-bold">Item Name</h3>
                <p class="text-gray-700">Price: $30</p>
            </div>
            <!-- Repeat item div for more items -->
        </div>

        <div class="comments-section">
            <h3 class="section-title">Comments</h3>
            <textarea placeholder="Add a comment"></textarea>
            <button>Add Comment</button>
        </div>

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
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>




