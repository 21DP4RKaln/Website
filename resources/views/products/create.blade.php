<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Add New Product</h1>
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name:</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price:</label>
                <input type="text" name="price" id="price" class="w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="w-full border-gray-300 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <input type="text" name="category" id="category" class="w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="specifics" class="block text-gray-700">Specifics (JSON):</label>
                <textarea name="specifics" id="specifics" class="w-full border-gray-300 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL:</label>
                <input type="text" name="image_url" id="image_url" class="w-full border-gray-300 rounded-md">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
            </div>
        </form>
    </div>
</body>
</html>

