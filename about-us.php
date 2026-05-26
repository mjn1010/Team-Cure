<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us - Team CURE</title>

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

                        <a href="about-us.php" class="text-cure-pink px-3 py-2 rounded-md text-sm font-medium">About Us</a>

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

                <a href="about-us.php" class="block text-cure-pink px-3 py-2 rounded-md text-base font-medium">About Us</a>

                <a href="corprate-sponsors.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Corporate Sponsors</a>

                <a href="shop.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Shop</a>

                <a href="photo-gallary.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Photo Gallery</a>

                <a href="become-a-sponsor.php" class="block bg-black hover:bg-gray-800 text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1 border-2 border-cure-pink">Become a Sponsor</a>

                <a href="#" class="block bg-cure-pink hover:bg-cure-pink-dark text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1">Donate</a>

            </div>

        </div>

    </nav>



    <section class="min-h-screen py-20 bg-white border-t-4 border-black relative pt-32">

        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>

        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>

        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">

            <h1 class="text-4xl md:text-5xl font-bold text-center mb-16 text-black">About Us</h1>



            <div class="grid grid-cols-1 gap-10">

                <div class="bg-white rounded-xl shadow-2xl border-4 border-cure-pink overflow-hidden">

                    <!-- Bio with inline photo -->
                    <div class="p-8 md:p-10">
                        <h2 class="text-3xl font-bold text-black mb-1">Mark Metzka</h2>
                        <p class="text-cure-pink font-semibold text-lg mb-3">Founder &amp; President, Team Cure Sports</p>
                        <div class="w-16 h-1 bg-cure-pink rounded mb-6"></div>

                        <div class="text-gray-700 text-base leading-relaxed">
                            <!-- Photo floated right inside the text -->
                            <img src="assets/gallery/bio/IMG_4272 (2).jpeg" alt="Mark Metzka" class="float-right ml-8 mb-4 w-64 md:w-80 rounded-lg border-4 border-cure-pink object-contain">

                            <p class="mb-4">Mark Metzka founded the Team Cure Foundation alongside the Team Cure Sports organization with a belief that the right support at the right time can shape the entire arc of a young person's life. As a standout student-athlete, Mark benefited from a community that invested in him, and played a role early on to set him up for the success he experienced. He was blessed to be given the resources to play basketball at the highest level. As he pays forward, Mark continues to provide that same support for young people and assist them as they strive for greatness both athletically and academically.</p>
                            <p class="mb-4">At Springfield Local High School, Mark was a three-year varsity starter, graduating in 1991 as the school's all-time leading scorer while compiling a team record of 63–6. He earned First Team All-Ohio honors, was selected to play in the prestigious North-South All-Star Game, and equally remarkable, graduated as his class valedictorian.</p>
                            <blockquote class="border-l-4 border-cure-pink pl-4 italic text-gray-500 mb-4">
                                "I was always supported as a young person and given the resources to pursue basketball at the highest level. It is my job to provide that same support for young people as they strive for greatness — both athletically and academically."
                            </blockquote>
                            <p class="mb-4">Mark went on to a distinguished four-year career at Slippery Rock University (1991–1995), where he accumulated 1,073 career points and set single-season records for three-point field goals made and free throw percentage. He finished sixth all-time in assists and was named an Academic All-American twice.</p>
                            <p class="mb-4">His playing career extended professionally, including time with Horsens IC, Danish JordanLigaen (1999–2001) and the Mahoning Valley Wildcats of the IBL (2005).</p>
                            <p class="mb-4">Through Team Cure Sports, Mark channels that same drive into something larger than basketball — providing direct financial support, scholarships, and funding for memorial golf outings and community fundraising efforts.</p>
                            <p class="font-semibold text-black">We appreciate your consideration of supporting the Team Cure Sports mission.</p>
                            <div class="clear-both"></div>
                        </div>
                    </div>

                    <!-- Bottom: 3 photos in a row -->
                    <div class="grid grid-cols-3 border-t-4 border-cure-pink">
                        <img src="assets/gallery/bio/image004.jpg" alt="Mark Metzka" class="w-full h-56 md:h-72 object-cover border-r-2 border-cure-pink">
                        <img src="assets/gallery/bio/IMG_0010.PNG" alt="Mark Metzka" class="w-full h-56 md:h-72 object-cover border-r-2 border-cure-pink">
                        <img src="assets/gallery/bio/IMG_0707.JPG" alt="Mark Metzka" class="w-full h-56 md:h-72 object-cover">
                    </div>

                </div>

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


