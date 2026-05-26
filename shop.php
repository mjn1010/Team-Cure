<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Team CURE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cure-pink': '#FF69B4',
                        'cure-pink-dark': '#FF1493',
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-white text-black">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black z-50 shadow-lg border-b-4 border-cure-pink">
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="index.php" class="flex items-center gap-3 hover:opacity-90 transition-opacity">
                        <img src="assets/IMG_5834.jpeg" alt="Team CURE Logo" class="h-12 w-auto">
                        <span class="text-2xl font-bold text-cure-pink">Team CURE</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="about-us.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">About Us</a>
                        <a href="corprate-sponsors.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Corporate Sponsors</a>
                        <a href="shop.php" class="text-cure-pink px-3 py-2 rounded-md text-sm font-medium">Shop</a>
                        <a href="photo-gallary.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Photo Gallery</a>
                    </div>
                    <div class="ml-8 flex items-center space-x-4">
                        <a href="#" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/teamcurefoundation/" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                    <a href="become-a-sponsor.php" class="ml-4 bg-black hover:bg-gray-800 text-white font-bold py-1.5 px-4 rounded-lg text-sm transition-colors shadow-lg border-2 border-cure-pink">Become a Sponsor</a>
                    <a href="#" class="ml-2 bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-1.5 px-4 rounded-lg text-sm transition-colors shadow-lg">Donate</a>
                </div>
                <div class="md:hidden flex items-center space-x-4">
                    <button id="mobile-menu-button" class="text-white hover:text-cure-pink focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-black border-b-4 border-cure-pink">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="about-us.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">About Us</a>
                <a href="corprate-sponsors.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Corporate Sponsors</a>
                <a href="shop.php" class="block text-cure-pink px-3 py-2 rounded-md text-base font-medium">Shop</a>
                <a href="photo-gallary.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Photo Gallery</a>
                <a href="become-a-sponsor.php" class="block bg-black hover:bg-gray-800 text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1 border-2 border-cure-pink">Become a Sponsor</a>
                <a href="#" class="block bg-cure-pink hover:bg-cure-pink-dark text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1">Donate</a>
            </div>
        </div>
    </nav>

    <!-- Page Header + How to Order -->
    <section class="pt-32 pb-10 bg-white border-t-4 border-black relative">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-10 text-black">Team CURE Shop</h1>
            <div class="bg-black rounded-2xl py-10 px-8">
            <h2 class="text-2xl font-bold text-white text-center mb-3">How to Order</h2>
            <p class="text-gray-400 text-center mb-8">Contact us with the item name and size.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

                <!-- Text -->
                <a href="sms:3304024900" class="group flex flex-col items-center gap-4 rounded-2xl border-2 border-gray-800 hover:border-cure-pink bg-gray-900 hover:bg-gray-900/80 p-7 transition-all text-center">
                    <span class="flex h-14 w-14 items-center justify-center rounded-full bg-cure-pink/10 border border-cure-pink/30 group-hover:bg-cure-pink/20 transition-colors">
                        <svg class="w-7 h-7 text-cure-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </span>
                    <div>
                        <p class="text-white font-bold text-lg">Text Us</p>
                        <p class="text-cure-pink font-semibold mt-1">(330) 402-4900</p>
                    </div>
                </a>

                <!-- Call -->
                <a href="tel:3304024900" class="group flex flex-col items-center gap-4 rounded-2xl border-2 border-gray-800 hover:border-cure-pink bg-gray-900 hover:bg-gray-900/80 p-7 transition-all text-center">
                    <span class="flex h-14 w-14 items-center justify-center rounded-full bg-cure-pink/10 border border-cure-pink/30 group-hover:bg-cure-pink/20 transition-colors">
                        <svg class="w-7 h-7 text-cure-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </span>
                    <div>
                        <p class="text-white font-bold text-lg">Call Us</p>
                        <p class="text-cure-pink font-semibold mt-1">(330) 402-4900</p>
                    </div>
                </a>

                <!-- Email -->
                <a href="mailto:teamcurefoundation@gmail.com?subject=Shop Order Inquiry&body=Hi Team CURE, I am interested in ordering an item from your shop. Item: " class="group flex flex-col items-center gap-4 rounded-2xl border-2 border-gray-800 hover:border-cure-pink bg-gray-900 hover:bg-gray-900/80 p-7 transition-all text-center">
                    <span class="flex h-14 w-14 items-center justify-center rounded-full bg-cure-pink/10 border border-cure-pink/30 group-hover:bg-cure-pink/20 transition-colors">
                        <svg class="w-7 h-7 text-cure-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </span>
                    <div>
                        <p class="text-white font-bold text-lg">Email Us</p>
                        <p class="text-cure-pink font-semibold mt-1 break-all">teamcurefoundation@gmail.com</p>
                    </div>
                </a>

            </div>
            </div>
        </div>
    </section>

    <!-- Product Catalog -->
    <section class="py-16 bg-white relative">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">

            <?php
            $products = [
                ['name' => 'Pink Hoodie', 'image' => 'assets/shop-pink-hoodie.jpeg'],
                ['name' => 'Gray Hoodie', 'image' => 'assets/shop-gray-hoodie.jpeg'],
                ['name' => 'Pink Tie-Dye T-Shirt', 'image' => 'assets/shop-pink-tiedye-tee.jpeg'],
                ['name' => 'Pink T-Shirts', 'image' => 'assets/shop-pink-tees.jpeg'],
                ['name' => 'Black T-Shirt', 'image' => 'assets/shop-black-tee.jpeg'],
                ['name' => 'Gray T-Shirt', 'image' => 'assets/shop-gray-tee.jpeg'],
            ];
            ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($products as $product): ?>
                <div class="bg-white rounded-2xl shadow-xl border-2 border-gray-200 hover:border-cure-pink transition-colors flex flex-col overflow-hidden group">
                    <!-- Product image -->
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center overflow-hidden">
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                            <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        <?php endif; ?>
                    </div>
                    <!-- Product info -->
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-xl font-bold text-black mb-1"><?= htmlspecialchars($product['name']) ?></h3>
                        <p class="text-cure-pink font-semibold text-sm mt-1">Contact us to order</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>
