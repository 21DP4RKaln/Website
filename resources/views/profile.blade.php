<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>{{ $user->name }}'s Profile</h1>
    <h2>Selling Items</h2>
    <ul>
        @foreach($sellingItems as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
    <h2>Wish List Items</h2>
    <ul>
        @foreach($wishListItems as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
</body>
</html>


