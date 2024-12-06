<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive - E-commerce Store</title>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black font-sans">
    <header class="bg-white shadow-md py-4">
        <nav class="container mx-auto flex items-center justify-between">
            <div class="text-xl font-bold text-red-600">Exclusive</div>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-700 hover:text-red-600">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600">Contact</a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600">Sign Up</a></li>
            </ul>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="What are you looking for?" class="border border-gray-300 rounded-md px-3 py-2 w-64">
                    <button type="submit" class="absolute right-2 top-2 text-gray-500">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div>
                    <i class="fas fa-shopping-cart text-gray-700 text-xl"></i>
                </div>
            </div>
        </nav>
    </header>

    <aside class="bg-gray-100 py-6">
        <ul class="space-y-2 px-6">
            <li class="hover:text-red-600">Woman's Fashion</li>
            <li class="hover:text-red-600">Men's Fashion</li>
            <li class="hover:text-red-600">Electronics</li>
            <li class="hover:text-red-600">Home & Lifestyle</li>
            <li class="hover:text-red-600">Medicine</li>
            <li class="hover:text-red-600">Sports & Outdoor</li>
            <li class="hover:text-red-600">Baby's & Toys</li>
            <li class="hover:text-red-600">Groceries & Pets</li>
            <li class="hover:text-red-600">Health & Beauty</li>
        </ul>
    </aside>

    <main class="container mx-auto py-8">
        <!-- Hero Banner -->
        <section class="relative mb-12">
            <img src="iphone-banner.jpg" alt="iPhone 14 Series" class="w-full h-auto">
            <div class="absolute top-1/2 left-12 transform -translate-y-1/2 text-white">
                <h2 class="text-3xl font-bold">Up to 10% off Voucher</h2>
                <a href="#" class="bg-red-600 text-white px-4 py-2 rounded-md mt-4 inline-block">Shop Now</a>
            </div>
        </section>

        <!-- Flash Sales -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Flash Sales</h2>
            <div class="flex space-x-2 mb-6">
                <span class="text-lg font-bold">03</span> :
                <span class="text-lg font-bold">23</span> :
                <span class="text-lg font-bold">19</span> :
                <span class="text-lg font-bold">56</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card -->
                <div class="border rounded-md p-4">
                    <img src="product1.jpg" alt="Product 1" class="w-full h-auto mb-4">
                    <h3 class="text-lg font-bold mb-2">HAVIT HV-G92 Gamepad</h3>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-red-600 font-bold">$120</span>
                        <span class="text-gray-500 line-through">$160</span>
                    </div>
                    <div class="flex items-center space-x-1 mb-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500">(88)</span>
                    </div>
                    <button class="bg-red-600 text-white w-full py-2 rounded-md">Add To Cart</button>
                </div>
            </div>
            <button class="mt-6 bg-red-600 text-white px-6 py-2 rounded-md">View All Products</button>
        </section>

        <!-- Additional Sections -->
        <!-- Repeat similar structure for Categories, Best Selling, Enhance Music, etc. -->

    </main>

    <footer class="bg-black text-white py-8">
        <div class="container mx-auto text-center">
            &copy; 2024 Exclusive. All rights reserved.
        </div>
    </footer>
</body>
</html>
