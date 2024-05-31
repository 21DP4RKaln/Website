<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .profile-header {
            background-color: #1b1b1b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .profile-sidebar {
            background-color: #2b2b2b;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }

        .profile-main {
            background-color: #1b1b1b;
            color: #fff;
            padding: 20px;
            flex-grow: 1;
        }

        .activity-item {
            background-color: #333;
            padding: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <div class="profile-header">
        <img src="path/to/your/avatar.jpg" alt="Profile Avatar" class="rounded-full mx-auto w-24">
        <h1 class="text-3xl mt-2">Username</h1>
        <p class="text-gray-400">No information given.</p>
    </div>

    <div class="flex">
        <div class="profile-sidebar w-1/4 p-4">
            <h2 class="text-xl mb-4">Currently Online</h2>
            <ul class="space-y-2">
                <li>Friend 1</li>
                <li>Friend 2</li>
                <li>Friend 3</li>
                <!-- Add more friends as needed -->
            </ul>
        </div>

        <div class="profile-main flex-grow p-4">
            <h2 class="text-2xl mb-4">Recent Activity</h2>
            <div class="activity-item">
                <h3 class="text-xl">Game Title</h3>
                <p>Last played on 20 May</p>
            </div>
            <div class="activity-item">
                <h3 class="text-xl">Game Title</h3>
                <p>Last played on 20 May</p>
            </div>
            <!-- Add more activity items as needed -->
        </div>
    </div>

</body>

</html>
