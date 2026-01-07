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
            <p> Shiikh Cumar Al-Faaruuq waa mid ka mid ah culimada ugu caansan uguna saameynta badan ee ku takhasusay tafsiirka Qur'aanka Kariimka ah. Wuxuu caan ku yahay fahamka qoto dheer ee diinta Islaamka iyo awoodiisa uu ku faahfaahin karo macnaha aayadaha Qur'aanka si fudud oo la fahmi karo.</p>
            <p> Tafsiirka Shiikh Cumar Al-Faaruuq wuxuu caan ku yahay inuu diiradda saaro macnaha guud ee aayadaha, isagoo isku dayaya inuu fahamsiiyo akhristaha sababta iyo macnaha ka dambeeya aayadahaas. Wuxuu sidoo kale isticmaalaa tusaalooyin iyo sheekooyin si uu u fududeeyo fahamka Qur'aanka.</p>
            <p> Shiikh Cumar Al-Faaruuq wuxuu sidoo kale caan ku yahay inuu ka hadlo arrimaha casriga ah ee la xiriira diinta Islaamka, isagoo isku dayaya inuu isku xiro Qur'aanka iyo nolosha maanta. Wuxuu ku boorinayaa muslimiinta inay fahmaan Qur'aanka si qoto dheer oo ay u dabaqaan noloshooda maalinlaha ah.</p>
            <p> Guud ahaan, tafsiirka Shiikh Cumar Al-Faaruuq waa mid qiimo leh oo ka caawinaya muslimiinta inay fahmaan Qur'aanka Kariimka ah si qoto dheer oo macno leh.</p>
            </section>
        </main>
        <?php include 'footer.php'; ?>
        </body>
        </html>