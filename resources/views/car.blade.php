<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <div class="text-center py-8">
        <h1 class="text-4xl font-bold">OUR CARS</h1>
        <p class="text-gray-500 mt-2">Available 70 Cars</p>
    </div>

    <!-- Filter Buttons -->
    <div class="flex justify-center gap-4 mb-8">
        <button class="px-4 py-2 bg-gray-300 rounded">New</button>
        <button class="px-4 py-2 bg-gray-300 rounded">Pre Order</button>
        <button class="px-4 py-2 bg-gray-800 text-white rounded">All</button>
    </div>

    <!-- Cars Grid -->
    <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        <!-- Car Item -->
        <div class="bg-white shadow rounded-lg p-4 border hover:border-red-600 transition">
            <img src="https://via.placeholder.com/300x200" alt="Audi RS6 Avant" class="w-full h-48 object-cover rounded-md">
            <div class="mt-4">
                <h2 class="text-lg font-semibold">Audi RS6 Avant</h2>
                <p class="text-red-600 font-bold text-xl mt-2">$271,378.98</p>
                <p class="text-yellow-500 text-sm">★★★★★</p>
                <div class="flex items-center mt-4 text-gray-500 text-sm">
                    <span class="flex items-center"><i class="fas fa-user mr-1"></i>4</span>
                    <span class="mx-2">|</span>
                    <span class="flex items-center"><i class="fas fa-cogs mr-1"></i>V8</span>
                    <span class="mx-2">|</span>
                    <span class="flex items-center"><i class="fas fa-road mr-1"></i>621 ft</span>
                    <span class="mx-2">|</span>
                    <span class="flex items-center"><i class="fas fa-tachometer-alt mr-1"></i>8 Speed</span>
                </div>
                <div class="flex mt-4 gap-2">
                    <button class="bg-red-600 text-white px-3 py-1 rounded">View</button>
                    <button class="bg-gray-300 text-black px-3 py-1 rounded">Detail</button>
                    <button class="bg-gray-300 text-black px-3 py-1 rounded">Specification</button>
                </div>
            </div>
        </div>


    </div>

</body>
</html>
