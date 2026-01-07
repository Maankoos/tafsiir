<?php
// tafsir.php
include 'config.php';

// Check if a specific surah_id is requested
$surah_id = isset($_GET['surah_id']) ? (int)$_GET['surah_id'] : null;
$surahs = $pdo->query('SELECT surah_id, arabic_name, english_name FROM surahs ORDER BY surah_id')->fetchAll();

// $tafsir_data = null;
// $error = null;

if ($surah_id) {
    // ----------------------------------------------------
    // VIEW 1: Display Tafsir for a specific Surah
    // ----------------------------------------------------
    $stmt = $pdo->prepare("
        SELECT s.arabic_name, s.english_name, s.audio_path, t.tafsir_text
        FROM surahs s
        LEFT JOIN tafsir_content t ON s.surah_id = t.surah_id
        WHERE s.surah_id = ?
    ");
    $stmt->execute([$surah_id]);
    $tafsir_data = $stmt->fetch();

    if (!$tafsir_data) {
        $error = "Tafsir content not found for this Surah.";
    } else {
        // Normalize audio path: ensure it works from any directory
        $audio_file = trim($tafsir_data['audio_path'], '/');
        if (file_exists(__DIR__ . '/' . $audio_file)) {
            $tafsir_data['audio_path'] = './' . $audio_file;
        } else {
            $error = " Audio file not found: " . htmlspecialchars($audio_file);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Tafsir - <?= $surah_id ? htmlspecialchars($tafsir_data['english_name'] ?? 'Surah Not Found') : 'Choose a Surah' ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .calligraphy {
            font-family: 'Amiri', serif; /* Use an elegant Arabic font if loaded */
            font-size: 3rem;
            color: #D4AF37; /* Gold */
        }
        /* Custom colors for the theme */
        .bg-deep-green { background-color: #004D40; }
        .text-gold { color: #D4AF37; }
        
        /* Dark Mode Styles */
        .dark-mode {
            background-color: #1a1a1a;
            color: #e5e5e5;
        }
        .dark-mode body {
            background-color: #1a1a1a !important;
        }
        .dark-mode .bg-white {
            background-color: #2d2d2d !important;
            color: #e5e5e5 !important;
        }
        .dark-mode .bg-gray-100 {
            background-color: #1a1a1a !important;
        }
        .dark-mode .text-gray-700 {
            color: #e5e5e5 !important;
        }
        .dark-mode .text-gray-600 {
            color: #d1d1d1 !important;
        }
        .dark-mode .border-gray-300 {
            border-color: #4a4a4a !important;
        }
        .dark-mode .hover\:bg-teal-50:hover {
            background-color: #2d4a4a !important;
        }
        .dark-mode .text-teal-700 {
            color: #81d4d4 !important;
        }
        .dark-mode .text-teal-800 {
            color: #6bc4c4 !important;
        }
        .dark-mode .bg-teal-100 {
            background-color: #2d4a4a !important;
        }
        .dark-mode .text-teal-800 {
            color: #81d4d4 !important;
        }
        .dark-mode .hover\:bg-teal-200:hover {
            background-color: #3d5a5a !important;
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php include 'header.php'; ?>

    <main class="container mx-auto p-4 md:p-10">

        <?php if ($surah_id && $tafsir_data): ?>
            <section class="relative max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-xl mb-10 border border-gray-200 overflow-hidden">
                <!-- Modern accent bar -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                
                <div class="relative">
                    <div class="mb-6">
                        <h1 class="text-4xl md:text-5xl font-bold text-[#004D40] mb-3 tracking-tight">
                            <?= htmlspecialchars($tafsir_data['english_name']) ?>
                        </h1>
                        <h2 class="text-3xl md:text-4xl text-gold mb-6 calligraphy" dir="rtl" style="text-shadow: 0 2px 10px rgba(212, 175, 55, 0.2);">
                            <?= htmlspecialchars($tafsir_data['arabic_name']) ?>
                        </h2>
                        <div class="h-1 w-24 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600 rounded-full"></div>
                    </div>

                <?php if (isset($error)): ?> 
                    <p class="text-red-600 font-semibold mb-4"><?= $error ?></p>
                <?php endif; ?>

                <?php if (!isset($error) && !empty($tafsir_data['audio_path'])): ?>
                <div class="mb-8 p-4 bg-gradient-to-r from-teal-50 to-white rounded-lg border border-teal-100">
                    <p class="text-sm font-semibold text-[#004D40] mb-3 uppercase tracking-wide">Recitation</p>
                    <audio controls class="w-full">
                        <source src="<?= htmlspecialchars($tafsir_data['audio_path']) ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <?php endif; ?>

                <div class="border-t border-gray-200 pt-8 mt-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-[#004D40] mb-2">Tafsir (Sookoobid)</h3>
                        <div class="h-1 w-20 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600 rounded-full"></div>
                    </div>
                    <div class="text-base md:text-lg leading-relaxed text-gray-700 whitespace-pre-wrap prose prose-teal max-w-none">
                        <?= nl2br(htmlspecialchars($tafsir_data['tafsir_text'] ?? 'No tafsir text available.')) ?>
                    </div>
                </div>
            </section>

        <?php else: ?>
            <!-- Heading and Search Button Section - Modern Design -->
            <div class="flex justify-between items-center mb-6 relative">
                <div class="flex-1">
                    <h1 class="text-4xl md:text-5xl font-bold text-[#004D40] mb-2 tracking-tight">
                        Tafsiirka Qur'anka Kariimka ah ee
                    </h1>
                    <div class="h-1 w-24 bg-gradient-to-r from-teal-600 to-teal-400 rounded-full"></div>
                </div>
                
                <!-- Search Button Container - Fixed Position -->
                <div class="ml-6 relative" style="min-width: 120px;">
                    <!-- Search Button -->
                    <button id="searchToggleBtn" 
                            class="flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-teal-600 to-teal-700 hover:from-teal-700 hover:to-teal-800 text-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="text-sm font-semibold">Raadi</span>
                    </button>

                    <!-- Search Input (Hidden by default) - Absolute positioned -->
                    <div id="searchContainer" class="hidden absolute top-0 right-0 z-50 transition-all duration-300" style="width: 400px;">
                        <div class="relative">
                            <input type="text" 
                                   id="surahSearch" 
                                   placeholder="Raadi Suuradaha... (Search Surahs...)" 
                                   class="w-full px-6 py-3 pl-14 pr-14 text-base rounded-full border-2 border-teal-300 focus:border-teal-500 focus:ring-4 focus:ring-teal-200 outline-none transition-all duration-300 shadow-xl bg-white text-gray-700 placeholder-gray-400">
                            <svg class="absolute left-5 top-1/2 transform -translate-y-1/2 w-5 h-5 text-teal-500" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <button id="clearSearch" 
                                    class="absolute right-5 top-1/2 transform -translate-y-1/2 text-teal-500 hover:text-teal-700 transition-colors duration-200 hidden">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-xl md:text-2xl font-medium text-teal-600 text-left mb-8 tracking-wide">
                Shiikh Cumar Al-Faaruuq
            </h2>

            <section id="surahsGrid" class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-10 gap-2">
             <?php foreach ($surahs as $surah): ?>
                <a href="tafsir.php?surah_id=<?= $surah['surah_id'] ?>" 
                 class="surah-card group block p-3 bg-white rounded-lg border border-gray-200 text-center hover:border-teal-400 hover:bg-gradient-to-br hover:from-teal-50 hover:to-white hover:shadow-lg transition-all duration-200"
                 data-english="<?= strtolower(htmlspecialchars($surah['english_name'])) ?>"
                 data-arabic="<?= htmlspecialchars($surah['arabic_name']) ?>"
                 data-id="<?= $surah['surah_id'] ?>">
            <p class="text-xs font-bold text-teal-700 mb-1 leading-tight"><?= $surah['surah_id'] ?></p>
            <p class="text-xs font-semibold text-gray-700 group-hover:text-[#004D40] leading-tight surah-english mb-1"><?= htmlspecialchars($surah['english_name']) ?></p>
            <p class="text-sm text-gold calligraphy leading-tight surah-arabic" dir="rtl"><?= htmlspecialchars($surah['arabic_name']) ?></p>
            </a>
            <?php endforeach; ?>
            </section>


        <?php endif; ?>

        <?php if ($surah_id): ?>
        <section class="mt-16 pt-8 border-t border-gray-200">
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-[#004D40] mb-2">Choose Another Surah</h3>
                <div class="h-1 w-20 bg-gradient-to-r from-teal-600 to-teal-400 rounded-full"></div>
            </div>
            <div class="flex flex-wrap gap-2 justify-center">
                <?php foreach ($surahs as $surah): ?>
                <a href="tafsir.php?surah_id=<?= $surah['surah_id'] ?>" 
                   class="text-sm px-3 py-1.5 rounded-lg bg-teal-50 text-[#004D40] hover:bg-teal-100 hover:text-[#004D40] border border-teal-200 hover:border-teal-300 transition-all duration-200 font-medium">
                    <?= $surah['surah_id'] ?>. <?= htmlspecialchars($surah['english_name']) ?>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        // Search toggle functionality
        const searchToggleBtn = document.getElementById('searchToggleBtn');
        const searchContainer = document.getElementById('searchContainer');
        const searchInput = document.getElementById('surahSearch');
        const clearButton = document.getElementById('clearSearch');
        const surahCards = document.querySelectorAll('.surah-card');
        const surahsGrid = document.getElementById('surahsGrid');

        // Toggle search bar
        searchToggleBtn.addEventListener('click', function() {
            if (searchContainer.classList.contains('hidden')) {
                // Show search bar
                searchContainer.classList.remove('hidden');
                searchToggleBtn.classList.add('hidden');
                searchInput.focus();
            }
        });

        // Hide search bar when clicking outside or pressing Escape
        document.addEventListener('click', function(e) {
            if (!searchContainer.contains(e.target) && !searchToggleBtn.contains(e.target) && !searchContainer.classList.contains('hidden')) {
                if (searchInput.value.trim() === '') {
                    searchContainer.classList.add('hidden');
                    searchToggleBtn.classList.remove('hidden');
                }
            }
        });

        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && this.value.trim() === '') {
                searchContainer.classList.add('hidden');
                searchToggleBtn.classList.remove('hidden');
            }
        });

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            // Show/hide clear button
            if (searchTerm.length > 0) {
                clearButton.classList.remove('hidden');
            } else {
                clearButton.classList.add('hidden');
            }

            let visibleCount = 0;
            
            surahCards.forEach(card => {
                const englishName = card.getAttribute('data-english');
                const arabicName = card.getAttribute('data-arabic');
                const surahId = card.getAttribute('data-id');
                
                // Check if search term matches English name, Arabic name, or surah ID
                const matches = englishName.includes(searchTerm) || 
                               arabicName.includes(searchTerm) || 
                               surahId === searchTerm;
                
                if (matches) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show message if no results
            let noResultsMsg = document.getElementById('noResults');
            if (visibleCount === 0 && searchTerm.length > 0) {
                if (!noResultsMsg) {
                    noResultsMsg = document.createElement('div');
                    noResultsMsg.id = 'noResults';
                    noResultsMsg.className = 'text-center py-8 text-gray-500 text-lg';
                    noResultsMsg.textContent = 'Suuradaha la raadinayey ma helin. (No surahs found.)';
                    surahsGrid.parentNode.insertBefore(noResultsMsg, surahsGrid.nextSibling);
                }
                noResultsMsg.style.display = 'block';
            } else if (noResultsMsg) {
                noResultsMsg.style.display = 'none';
            }
        });

        // Clear search
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
            searchInput.focus();
        });

        // Dark Mode Toggle Functionality
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const body = document.body;
        const html = document.documentElement;

        // Check for saved theme preference or default to light mode
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        // Apply theme on page load
        if (currentTheme === 'dark') {
            html.classList.add('dark-mode');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        } else {
            html.classList.remove('dark-mode');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }

        // Toggle dark mode
        darkModeToggle.addEventListener('click', function() {
            html.classList.toggle('dark-mode');
            
            if (html.classList.contains('dark-mode')) {
                // Dark mode is ON
                localStorage.setItem('theme', 'dark');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                // Light mode is ON
                localStorage.setItem('theme', 'light');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
