<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team CURE</title>
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
        html {
            scroll-behavior: smooth;
        }
        #sponsor-carousel {
            display: flex;
            width: 100%;
        }
        .sponsor-slide {
            flex: 0 0 100%;
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-white text-black">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black z-50 shadow-lg border-b-4 border-cure-pink">
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="#home" class="flex items-center gap-3 hover:opacity-90 transition-opacity">
                        <img src="assets/IMG_5834.jpeg" alt="Team CURE Logo" class="h-12 w-auto">
                        <span class="text-2xl font-bold text-cure-pink">Team CURE</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#home" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="about-us.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">About Us</a>
                        <a href="corprate-sponsors.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Corporate Sponsors</a>
                        <a href="shop.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Shop</a>
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
                        <a href="#" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="X (Twitter)">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.742l7.735-8.835L1.254 2.25H8.08l4.259 5.63 5.905-5.63zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                    <a href="become-a-sponsor.php" class="ml-4 bg-black hover:bg-gray-800 text-white font-bold py-1.5 px-4 rounded-lg text-sm transition-colors shadow-lg border-2 border-cure-pink">Become a Sponsor</a>
                    <a href="#" class="ml-2 bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-1.5 px-4 rounded-lg text-sm transition-colors shadow-lg">Donate</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center space-x-4">
                    <a href="#" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/teamcurefoundation/" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:text-cure-pink transition-colors" aria-label="X (Twitter)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.742l7.735-8.835L1.254 2.25H8.08l4.259 5.63 5.905-5.63zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <button id="mobile-menu-button" class="text-white hover:text-cure-pink focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-black border-b-4 border-cure-pink">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="about-us.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">About Us</a>
                <a href="corprate-sponsors.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Corporate Sponsors</a>
                <a href="shop.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Shop</a>
                <a href="photo-gallary.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Photo Gallery</a>
                <a href="become-a-sponsor.php" class="block bg-black hover:bg-gray-800 text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1 border-2 border-cure-pink">Become a Sponsor</a>
                <a href="#" class="block bg-cure-pink hover:bg-cure-pink-dark text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1">Donate</a>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-white pt-16 border-b-4 border-cure-pink relative">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 py-20 relative z-10">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
                <div class="text-left">
                    <h1 class="text-4xl md:text-6xl font-bold text-black mb-6">
                        Welcome to Team CURE
                    </h1>
                    <p class="text-lg md:text-xl text-black leading-relaxed mb-8">
                        Team CURE is a non-profit organization dedicated to supporting our community through meaningful programs,
                        youth empowerment, and hands-on partnerships. Your involvement helps us create real impact—one step, one
                        family, and one brighter future at a time.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="become-a-sponsor.php" class="inline-flex items-center justify-center bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-lg border-2 border-cure-pink">
                            Become a Sponsor
                        </a>
                        <a href="shop.php" class="inline-flex items-center justify-center bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-lg">
                            Shop Fundraiser Gear
                        </a>
                    </div>
                </div>

                <!-- Logo -->
                <div class="flex justify-center lg:justify-end">
                    <img src="assets/IMG_5834.jpeg" alt="Team CURE Logo" class="w-80 md:w-[30rem] h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="min-h-screen py-20 bg-white border-t-4 border-black border-b-4 border-cure-pink relative">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-black">
                About Us
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="bg-white text-black rounded-lg shadow-2xl border-4 border-cure-pink overflow-hidden">

                    <!-- Header -->
                    <div class="bg-black px-8 md:px-12 py-6">
                        <h3 class="text-3xl font-bold text-cure-pink">Our Story</h3>
                    </div>

                    <!-- Key stats strip -->
                    <div class="grid grid-cols-3 divide-x divide-cure-pink border-b-4 border-cure-pink">
                        <div class="py-6 text-center">
                            <p class="text-3xl font-extrabold text-cure-pink">2013</p>
                            <p class="text-sm font-semibold text-gray-600 mt-1">Founded</p>
                        </div>
                        <div class="py-6 text-center">
                            <p class="text-3xl font-extrabold text-cure-pink">30+</p>
                            <p class="text-sm font-semibold text-gray-600 mt-1">Teams</p>
                        </div>
                        <div class="py-6 text-center">
                            <p class="text-3xl font-extrabold text-cure-pink">501(c)(3)</p>
                            <p class="text-sm font-semibold text-gray-600 mt-1">Nonprofit</p>
                        </div>
                    </div>

                    <!-- Origin -->
                    <div class="px-8 md:px-12 py-8 border-b-4 border-gray-100">
                        <p class="text-base md:text-lg leading-relaxed text-gray-800">Team Cure Sports was founded in 2013 with a single girls' basketball team looking to play in the spring. The name was chosen in honor of my mother — a breast cancer survivor — and that spirit of fighting for those we love has guided everything we've built since.</p>
                        <p class="text-base md:text-lg leading-relaxed text-gray-800 mt-4">Today, we've grown to nearly 30 teams playing under our name. A core reason for that growth is catalyzed by our principle of <span class="font-semibold text-black">never turning away a player due to an inability to pay.</span></p>
                    </div>

                    <!-- Pull quote -->
                    <div class="bg-black px-8 md:px-12 py-8 border-b-4 border-cure-pink">
                        <blockquote class="border-l-4 border-cure-pink pl-6 italic text-white text-lg md:text-xl leading-relaxed">
                            "Basketball is our vehicle to raise awareness, and to provide real, direct help to those in our club organization and extended community."
                        </blockquote>
                    </div>

                    <!-- Mission evolution -->
                    <div class="px-8 md:px-12 py-8 border-b-4 border-gray-100">
                        <h4 class="text-xl font-bold text-black mb-3">From Club to Cause</h4>
                        <p class="text-base md:text-lg leading-relaxed text-gray-800">As we grew, it became clear that many of our families had been deeply affected by cancer or other serious health conditions where the burdens extend well beyond the individual. That realization led us to evolve from a club basketball organization into something more — a charitable organization committed to providing direct support to families and community members in need.</p>
                    </div>

                    <!-- What we've done -->
                    <div class="px-8 md:px-12 py-8 border-b-4 border-gray-100">
                        <h4 class="text-xl font-bold text-black mb-4">What We've Built</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="flex items-start gap-3">
                                <span class="mt-1 w-3 h-3 rounded-full bg-cure-pink flex-shrink-0"></span>
                                <p class="text-gray-800">Funded scholarships for student-athletes</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="mt-1 w-3 h-3 rounded-full bg-cure-pink flex-shrink-0"></span>
                                <p class="text-gray-800">Sponsored memorial golf outings</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="mt-1 w-3 h-3 rounded-full bg-cure-pink flex-shrink-0"></span>
                                <p class="text-gray-800">Organized basketball tournaments</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="mt-1 w-3 h-3 rounded-full bg-cure-pink flex-shrink-0"></span>
                                <p class="text-gray-800">Launched 529 education savings plans</p>
                            </div>
                        </div>
                        <p class="text-base md:text-lg leading-relaxed text-gray-800 mt-4">In late 2025, we took our next step by establishing official 501(c)(3) nonprofit status — giving us the foundation to extend our reach to support even more people in need. A large, close-knit network is both a gift and a responsibility where every year, we hear of more individuals and families we want to help, and we take that seriously in hopes of bringing some relief and joy to each situation.</p>
                    </div>

                    <!-- Closing + CTA -->
                    <div class="px-8 md:px-12 py-8 flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                        <div>
                            <p class="text-base md:text-lg leading-relaxed text-gray-800 mb-4">We are actively seeking sponsorships and donations to help us fulfill our mission. Thank you for considering being a part of what we're building.</p>
                            <p class="font-bold text-black text-lg">Mark Metzka</p>
                            <p class="text-cure-pink font-semibold">Founder / President</p>
                        </div>
                        <a href="become-a-sponsor.php" class="inline-flex items-center gap-2 bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-lg flex-shrink-0">
                            See Sponsorship Opportunities
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors (Condensed) -->
    <section class="min-h-screen py-20 bg-white border-t-4 border-black border-b-4 border-cure-pink relative">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 gap-10 items-start">
                <!-- Sponsors -->
                <div id="sponsors">
                    <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-black">
                        Sponsors
                    </h2>

                    <div class="bg-white text-black rounded-lg shadow-2xl p-6 md:p-10 border-4 border-cure-pink">
                        <div class="relative overflow-hidden">
                            <!-- Sponsor carousel container -->
                            <div id="sponsor-carousel" class="flex transition-transform duration-500 ease-in-out">
                                <?php
                                $sponsors = [
                                    ['name' => 'SRU Federal Credit Union', 'logo' => 'assets/sru-fcu-logo.png'],
                                    ['name' => 'A Plus', 'logo' => 'assets/sponsors/a-plus.png'],
                                ];

                                foreach ($sponsors as $index => $sponsor) {
                                    echo '<div class="sponsor-slide min-w-full flex items-center justify-center px-8">';
                                    echo '<div class="bg-white rounded-lg shadow-xl p-8 md:p-12 border-4 border-black w-full max-w-md flex flex-col items-center">';
                                    if (!empty($sponsor["logo"])) {
                                        echo '<div class="mb-4 w-full flex items-center justify-center">';
                                        echo '<img src="' . htmlspecialchars($sponsor["logo"]) . '" alt="' . htmlspecialchars($sponsor["name"]) . ' logo" class="max-h-24 w-auto object-contain">';
                                        echo '</div>';
                                    } else {
                                        echo '<div class="h-48 w-full bg-gradient-to-br from-cure-pink to-black rounded-lg flex items-center justify-center mb-4">';
                                        echo '<span class="text-white text-2xl md:text-3xl font-bold">' . htmlspecialchars($sponsor['name']) . '</span>';
                                        echo '</div>';
                                    }
                                    if ($sponsor['name'] === 'SRU Federal Credit Union') {
                                        echo '<p class="text-center text-black text-lg">SRU Federal Credit Union</p>';
                                    } else {
                                        echo '<p class="text-center text-black text-lg">placeholder</p>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Navigation arrows -->
                        <div class="flex justify-center items-center mt-8 space-x-4">
                            <button id="prev-sponsor" class="bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button id="next-sponsor" class="bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        <!-- Become a sponsor button -->
                        <div class="flex justify-center mt-8">
                            <a href="#contact-us" class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-lg border-2 border-cure-pink inline-flex items-center justify-center">
                                Become a sponsor!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- JavaScript for interactivity -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Sponsors carousel
        let currentSponsorIndex = 0;
        const sponsorSlides = document.querySelectorAll('.sponsor-slide');
        const totalSponsors = sponsorSlides.length;
        const carousel = document.getElementById('sponsor-carousel');

        function updateSponsorCarousel() {
            carousel.style.transform = `translateX(-${currentSponsorIndex * 100}%)`;
        }

        document.getElementById('next-sponsor').addEventListener('click', function() {
            currentSponsorIndex = (currentSponsorIndex + 1) % totalSponsors;
            updateSponsorCarousel();
        });

        document.getElementById('prev-sponsor').addEventListener('click', function() {
            currentSponsorIndex = (currentSponsorIndex - 1 + totalSponsors) % totalSponsors;
            updateSponsorCarousel();
        });

        // Auto-rotate sponsors every 5 seconds
        setInterval(function() {
            currentSponsorIndex = (currentSponsorIndex + 1) % totalSponsors;
            updateSponsorCarousel();
        }, 5000);

        // Gallery carousel
        let currentGalleryIndex = 0;
        const galleryCarousel = document.getElementById('gallery-carousel');
        const gallerySlides = document.querySelectorAll('.gallery-slide');
        const totalGallery = gallerySlides.length;

        function updateGalleryCarousel() {
            if (!galleryCarousel) return;
            galleryCarousel.style.transform = `translateX(-${currentGalleryIndex * 100}%)`;
        }

        document.getElementById('next-gallery').addEventListener('click', function() {
            currentGalleryIndex = (currentGalleryIndex + 1) % totalGallery;
            updateGalleryCarousel();
        });

        document.getElementById('prev-gallery').addEventListener('click', function() {
            currentGalleryIndex = (currentGalleryIndex - 1 + totalGallery) % totalGallery;
            updateGalleryCarousel();
        });

        // Auto-rotate gallery every 5 seconds
        setInterval(function() {
            if (totalGallery <= 0) return;
            currentGalleryIndex = (currentGalleryIndex + 1) % totalGallery;
            updateGalleryCarousel();
        }, 5000);

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                // Don't intercept placeholder anchors like href="#" (let them navigate normally).
                if (!href || href === '#') return;
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>

