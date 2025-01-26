<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <div class="container mx-auto px-4">
        <!-- Search Form -->
        <form method="GET" action="{{ route('products.index') }}" class="mb-6 flex justify-center">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="Search Products"
                class="border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full max-w-sm"
            >
            <button 
                type="submit" 
                class="bg-blue-500 text-white px-6 py-2 rounded-r-md hover:bg-blue-600 transition duration-300">
                Search
            </button>
        </form>

        <!-- Product Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white shadow-md rounded-lg border-collapse">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">{{ $product->id }}</td>
                            <td class="px-4 py-2">{{ $product->name }}</td>
                            <td class="px-4 py-2">${{ number_format($product->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
</body>
</html>
