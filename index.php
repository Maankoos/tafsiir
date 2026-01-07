<?php
// index.php
include 'config.php';
// Fetch latest 3 articles for the News section
$stmt = $pdo->query('SELECT title, summary FROM articles ORDER BY created_at DESC LIMIT 3');
$news_articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafsir Sh.Omer Alfaaruuq</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Arabic Font -->
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">

<style>
.calligraphy {
    font-family: 'Amiri', serif;
}
</style>

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
        .dark-mode .bg-gray-50 {
            background-color: #1a1a1a !important;
        }
        .dark-mode .text-gray-600 {
            color: #d1d1d1 !important;
        }
        .dark-mode .text-teal-700 {
            color: #81d4d4 !important;
        }
        .dark-mode .text-deep-green {
            color: #6bc4c4 !important;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <?php include 'header.php'; // Navigation/Header ?>

    <main class="container mx-auto px-4 sm:px-6 md:px-8 py-6 sm:py-8 md:py-12">
        <!-- Hero Banner - Modern Design -->
        <section class="relative overflow-hidden bg-gradient-to-br from-[#004D40] via-[#00695C] to-[#004D40] 
rounded-2xl shadow-2xl mb-12 p-6 sm:p-8 md:p-16 text-center">

    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-40 h-40 sm:w-64 sm:h-64 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-56 h-56 sm:w-96 sm:h-96 bg-teal-400 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10" dir="rtl">
        <h1 class="calligraphy text-3xl sm:text-4xl md:text-6xl mb-4 text-[#D4AF37]">
            بسم الله الرحمن الرحيم
        </h1>

        <p class="text-base sm:text-lg md:text-2xl text-white leading-relaxed max-w-3xl mx-auto">
            Tafsiirka Qur'aanka kariimka ah ee <br>
            <span class="text-[#D4AF37] font-semibold">
                Shiikh Cumar Al-Faaruuq
            </span>
        </p>
    </div>
</section>


        <!-- Content Cards - Modern Grid -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-12">

            <!-- Fahamka quranka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-5 sm:p-6 md:p-8">

                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-teal-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Fahamka quranka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Fahamka Qur'aanka micnihiisu waa in aan Qur'aanka u akhrino si faham leh, ma aha keliya in aan erayada ku celcelino; waa in aan ogaano fariinta guud ee Ilaahay doonayo, waxa uu ina dhaafayo, waxa uu ina reebayo, iyo xikmadda ka dambeysa.</p>
                    <a href="readmore.php?topic=fahamka-quranka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Taariikhda Shiikha Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-gold to-yellow-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Taariikhda Shiikha</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro taariikhda nololeedka Shiikh Cumar Al-Faaruuq, waxbarashadiisa, macluumaadka uu ka helay culuumta diinta, iyo kaalintii uu ka qaatay horumarinta fahamka Qur'aanka.</p>
                    <a href="readmore.php?topic=taariikhda-shiikha" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Axkaamta Cumrada Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Axkaamta Cumrada</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro axkaamta cumrada, shuruucda, sunnada, iyo waxyaabaha lagu furo cumrada. Waxbarasho dheeri ah oo ku saabsan maalmaha muhiimka ah ee cumrada.</p>
                    <a href="readmore.php?topic=axkaamta-cumrada" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Axkaamta Xajka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Axkaamta Xajka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro axkaamta xajka, tilaabada, shuruucda, iyo waxyaabaha lagu furo xajka. Waxbarasho dheeri ah oo ku saabsan xajka iyo manasikada.</p>
                    <a href="readmore.php?topic=axkaamta-xajka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Islaamka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Islaamka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro aasaaska Islaamka, arkaanka, shahaadada, salaadda, zakada, iyo dhammaan arimaha muhiimka ah ee diinta Islaamka.</p>
                    <a href="readmore.php?topic=islaamka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Taariikhda Nabiga Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Taariikhda Nabiga</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro taariikhda nololeedka Nebi Muxamed (SCW), dhalashadiisa, nubuuwwadiisa, hijraddiisa, iyo dhammaan dhacdooyinka muhiimka ah ee taariikhda Islaamka.</p>
                    <a href="readmore.php?topic=taariikhda-nabiga" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Axkaamta Salaadda Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Axkaamta Salaadda</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro axkaamta salaadda, shuruucda, sunnada, iyo waxyaabaha lagu furo salaadda. Waxbarasho dheeri ah oo ku saabsan salaadda iyo waqtiga ay tahay.</p>
                    <a href="readmore.php?topic=axkaamta-salaadda" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Akhlaaqda Islaamka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Akhlaaqda Islaamka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro akhlaaqda Islaamka, sida loo dhaqmo, xirfadaha wanaagsan, iyo dhammaan qaababka wanaagsan ee nolosha Islaamka.</p>
                    <a href="readmore.php?topic=akhlaaqda-islaamka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Fiqhka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Fiqhka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro fiqhka Islaamka, qawaaniinta, go'aamada, iyo dhammaan arimaha sharciga ah ee diinta Islaamka.</p>
                    <a href="readmore.php?topic=fiqhka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Hadiithka Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Hadiithka</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro hadiithka Nebi Muxamed (SCW), ahaanshaha, xaqiijinta, iyo dhammaan culuumta hadiithka.</p>
                    <a href="readmore.php?topic=hadiithka" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Aqoonta Diinta Card -->
            <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
                <div class="p-8">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#004D40] mb-3">Aqoonta Diinta</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">Baro aqoonta diinta Islaamka, culuumta, iyo dhammaan arimaha muhiimka ah ee diinta iyo barashada.</p>
                    <a href="readmore.php?topic=aqoonta-diinta" class="inline-flex items-center text-gold font-semibold hover:text-teal-700 transition-colors duration-200 group text-sm">
                        Akhri dheeraad ah
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
            </section>

        <!-- News Section - Modern Design -->
        <section>
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-[#004D40] mb-2">Recent News & Articles</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600 rounded-full"></div>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($news_articles as $article): ?>
                <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-[#004D40] mb-3 group-hover:text-teal-600 transition-colors duration-200"><?= htmlspecialchars($article['title']) ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed"><?= htmlspecialchars($article['summary']) ?>...</p>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; // Footer content ?>

    <script>
        // Dark Mode Toggle Functionality
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
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
        if (darkModeToggle) {
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
        }
    </script>
</body>
</html>