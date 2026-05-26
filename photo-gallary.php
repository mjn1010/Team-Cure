<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery - Team CURE</title>
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
                        <a href="about-us.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">About Us</a>
                        <a href="corprate-sponsors.php" class="text-white hover:text-cure-pink px-3 py-2 rounded-md text-sm font-medium transition-colors">Corporate Sponsors</a>
                        <a href="shop.php">Shop</a>
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
                <a href="index.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="about-us.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">About Us</a>
                <a href="corprate-sponsors.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Corporate Sponsors</a>
                <a href="shop.php">Shop</a>
                <a href="photo-gallary.php" class="block text-white hover:text-cure-pink px-3 py-2 rounded-md text-base font-medium">Photo Gallery</a>
                <a href="become-a-sponsor.php" class="block bg-black hover:bg-gray-800 text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1 border-2 border-cure-pink">Become a Sponsor</a>
                <a href="#" class="block bg-cure-pink hover:bg-cure-pink-dark text-white px-3 py-2 rounded-md text-base font-medium text-center mt-1">Donate</a>
            </div>
        </div>
    </nav>

    <?php $galleryEvents = require 'gallery-events.php'; ?>

    <!-- Photo Gallery Content Section -->
    <section class="min-h-screen py-20 bg-white border-t-4 border-black relative pt-32">
        <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-40 bg-black opacity-30 border-r-4 border-cure-pink"></div>
        <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-40 bg-black opacity-30 border-l-4 border-cure-pink"></div>
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8 lg:px-12 relative z-10">
            <!-- Events list -->
            <div id="events-view">
                <h1 class="text-4xl md:text-5xl font-bold text-center mb-4 text-black">Photo Gallery</h1>
                <p class="text-center text-gray-600 text-lg mb-12 max-w-2xl mx-auto">
                    Browse photos from our community events. Select an event to view its gallery.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($galleryEvents as $event): ?>
                    <article class="group flex flex-col overflow-hidden rounded-xl border-4 border-black bg-white shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="aspect-[16/10] bg-gradient-to-br from-cure-pink to-black flex items-center justify-center relative overflow-hidden">
                            <?php
                            $coverPhoto = null;
                            foreach ($event['photos'] as $photo) {
                                if (!empty($photo['src']) && file_exists($photo['src'])) {
                                    $coverPhoto = $photo['src'];
                                    break;
                                }
                            }
                            if ($coverPhoto): ?>
                                <img src="<?php echo htmlspecialchars($coverPhoto); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" class="absolute inset-0 w-full h-full object-cover">
                            <?php else: ?>
                                <svg class="w-16 h-16 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            <?php endif; ?>
                            <span class="absolute top-3 right-3 bg-black/70 text-white text-xs font-semibold px-2 py-1 rounded-full">
                                <?php echo count($event['photos']); ?> photos
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <p class="text-cure-pink text-sm font-semibold uppercase tracking-wide mb-1"><?php echo htmlspecialchars($event['date']); ?></p>
                            <h2 class="text-xl font-bold text-black mb-2"><?php echo htmlspecialchars($event['title']); ?></h2>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1"><?php echo htmlspecialchars($event['description']); ?></p>
                            <button
                                type="button"
                                class="view-event-photos w-full inline-flex items-center justify-center gap-2 bg-cure-pink hover:bg-cure-pink-dark text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md"
                                data-event-id="<?php echo htmlspecialchars($event['id']); ?>"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                View Photos
                            </button>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Single event photo view -->
            <div id="event-photos-view" class="hidden">
                <button type="button" id="back-to-events" class="inline-flex items-center gap-2 text-black hover:text-cure-pink font-semibold mb-8 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Events
                </button>
                <h2 id="event-photos-title" class="text-3xl md:text-4xl font-bold text-black mb-2"></h2>
                <p id="event-photos-date" class="text-cure-pink font-semibold mb-2"></p>
                <p id="event-photos-description" class="text-gray-600 mb-10 max-w-3xl"></p>
                <div id="event-photos-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
            </div>
        </div>
    </section>

    <script type="application/json" id="gallery-events-data"><?php echo json_encode($galleryEvents, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?></script>

    <?php include 'footer.php'; ?>

    <!-- JavaScript for interactivity -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        const galleryEvents = JSON.parse(document.getElementById('gallery-events-data').textContent);
        const eventsView = document.getElementById('events-view');
        const photosView = document.getElementById('event-photos-view');
        const photosGrid = document.getElementById('event-photos-grid');

        function showEventPhotos(eventId) {
            const event = galleryEvents.find(e => e.id === eventId);
            if (!event) return;

            document.getElementById('event-photos-title').textContent = event.title;
            document.getElementById('event-photos-date').textContent = event.date;
            document.getElementById('event-photos-description').textContent = event.description;

            photosGrid.innerHTML = '';
            event.photos.forEach((photo, index) => {
                const cell = document.createElement('div');
                cell.className = 'overflow-hidden rounded-lg border-4 border-black shadow-lg bg-white';
                if (photo.src) {
                    cell.innerHTML = `<img src="${photo.src}" alt="${photo.alt || event.title}" class="w-full aspect-[4/3] object-cover">`;
                } else {
                    cell.innerHTML = `
                        <div class="aspect-[4/3] bg-gradient-to-br from-cure-pink/80 to-black flex flex-col items-center justify-center p-4 text-center">
                            <svg class="w-10 h-10 text-white/50 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span class="text-white text-sm font-medium">${photo.alt || 'Photo ' + (index + 1)}</span>
                        </div>`;
                }
                photosGrid.appendChild(cell);
            });

            eventsView.classList.add('hidden');
            photosView.classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        document.querySelectorAll('.view-event-photos').forEach(btn => {
            btn.addEventListener('click', () => showEventPhotos(btn.dataset.eventId));
        });

        document.getElementById('back-to-events').addEventListener('click', () => {
            photosView.classList.add('hidden');
            eventsView.classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        const params = new URLSearchParams(window.location.search);
        const eventParam = params.get('event');
        if (eventParam && galleryEvents.some(e => e.id === eventParam)) {
            showEventPhotos(eventParam);
        }
    </script>
</body>
</html>

