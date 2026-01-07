<!-- <header class="bg-deep-green shadow-lg">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="index.php" class="text-3xl font-bold text-gold">
            <span class="calligraphy">التفسير لقرآن الكريم</span> </br> Tafsiirka Quranka Kariimka ah
        </a>
        <nav>
            <a href="index.php" class="text-white hover:text-teal-200 mx-3">Home</a>
            <a href="tafsir.php" class="text-white hover:text-teal-200 mx-3">Tafsir</a>
            <a href="about.php" class="text-white hover:text-teal-200 mx-3">About</a>
        </nav>
    </div>
</header> -->



<!-- <header class="bg-deep-green shadow-lg">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="index.php" class="text-3xl font-bold text-gold">
            <span class="calligraphy">التفسير لقرآن الكريم</span><br>
            <span class="text-sm font-light font-serif tracking-wide text-teal-100">
                Tafsiirka Quranka Kariimka ah
            </span>
        </a>
        <nav>
            <a href="index.php" class="text-white hover:text-teal-200 mx-3">Home</a>
            <a href="tafsir.php" class="text-white hover:text-teal-200 mx-3">Tafsir</a>
            <a href="about.php" class="text-white hover:text-teal-200 mx-3">About</a>
        </nav>
    </div>
</header> -->

<header class="bg-gradient-to-r from-[#004D40] via-[#00695C] to-[#004D40] shadow-xl border-b border-teal-800/30">
    <div class="container mx-auto px-6 py-5">
        <div class="flex justify-between items-center">
            <!-- Title Section -->
            <a href="index.php" class="group flex items-center space-x-4">
                <div class="flex flex-col">
                    <span class="calligraphy text-3xl font-bold text-gold leading-tight tracking-wide">التفسير القرآن الكريم</span>
                    <span class="text-xs font-medium tracking-wider text-teal-200/90 uppercase mt-1" style="font-family: 'Inter', sans-serif; letter-spacing: 0.1em;">
                        Tafsiirka Quranka Kariimka ah
                    </span>
                </div>
            </a>

            <!-- Logo Section - Modern & Professional -->
            <div class="flex justify-center items-center mx-8 relative">
                <div class="relative group cursor-pointer">
                    <!-- Subtle glow effect -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-yellow-400/40 via-gold/60 to-yellow-400/40 blur-lg group-hover:blur-xl transition-all duration-500"></div>
                    
                    <!-- Modern border ring -->
                    <div class="absolute inset-0 rounded-full border-2 border-yellow-400/60 group-hover:border-yellow-400 transition-all duration-300"></div>
                    
                    <!-- Logo with modern styling -->
                    <img src="assets/images/quran-logo.png" 
                         alt="Qur'an Logo" 
                         class="relative w-16 h-16 rounded-full shadow-2xl border-2 border-yellow-400/80 group-hover:scale-105 transition-all duration-300 object-cover"
                         style="filter: drop-shadow(0 4px 12px rgba(212, 175, 55, 0.4));">
                </div>
            </div>

            <!-- Navigation Section - Modern Design -->
            <nav class="flex items-center space-x-1">
                <a href="index.php" 
                   class="px-4 py-2 text-sm font-medium text-white/90 hover:text-gold transition-all duration-200 rounded-lg hover:bg-white/5 relative group">
                   <span class="relative z-10">Home</span>
                   <span class="absolute inset-0 bg-gradient-to-r from-gold/20 to-transparent opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-200"></span>
                </a>

                <a href="tafsir.php" 
                   class="px-4 py-2 text-sm font-medium text-white/90 hover:text-gold transition-all duration-200 rounded-lg hover:bg-white/5 relative group">
                   <span class="relative z-10">Tafsir</span>
                   <span class="absolute inset-0 bg-gradient-to-r from-gold/20 to-transparent opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-200"></span>
                </a>

                <a href="about.php" 
                   class="px-4 py-2 text-sm font-medium text-white/90 hover:text-gold transition-all duration-200 rounded-lg hover:bg-white/5 relative group">
                   <span class="relative z-10">About</span>
                   <span class="absolute inset-0 bg-gradient-to-r from-gold/20 to-transparent opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-200"></span>
                </a>

                <!-- Day/Night Toggle - Modern Button -->
                <button id="darkModeToggle" 
                        class="ml-3 p-2.5 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-lg shadow-lg transition-all duration-200 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gold/50 border border-white/10">
                    <!-- Sun Icon (Day Mode) -->
                    <svg id="sunIcon" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                    </svg>
                    <!-- Moon Icon (Night Mode) -->
                    <svg id="moonIcon" class="w-4 h-4 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</header>

