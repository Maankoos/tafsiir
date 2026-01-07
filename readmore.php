<?php
// readmore.php
include 'config.php';

// Get topic from URL parameter
$topic = isset($_GET['topic']) ? $_GET['topic'] : 'fahamka-quranka';

// Define content for each topic
$topics = [
    'fahamka-quranka' => [
        'title' => 'Fahamka Qur\'aanka',
        'icon' => 'book',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Fahamka Qur\'aanka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Fahamka Qur\'aanka micnihiisu waa in aan Qur\'aanka u akhrino si faham leh, ma aha keliya in aan erayada ku celcelino; waa in aan ogaano fariinta guud ee Ilaahay doonayo, waxa uu ina dhaafayo, waxa uu ina reebayo, iyo xikmadda ka dambeysa.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Fahamka Qur\'aanka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Qur\'aanku waa hanuun nololeed – si uu qofka u naqshadeeyo akhlaaqdiisa, fikirkiisa iyo ficilladiisa maalin kasta. Marka aad Qur\'aanka baranayso, ku baro niyad saafi ah iyo doonis ah in aad ku dhaqanto.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Sida Loo Fahmo Qur\'aanka</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Akhrinta si dheeri ah iyo dheeraad ah</li>
                <li>Barashada tafsiirka</li>
                <li>Fahamka ereyada muhiimka ah</li>
                <li>Xidhiidhka aayadaha</li>
                <li>Dhaqanka waxa la akhriyey</li>
            </ul>
            
            <p class="text-gray-700 leading-relaxed">Qof kasta oo doonaya in uu fahmo Qur\'aanka waa in uu u dhaqmo si toos ah, uuna ka faa\'iideysto hanuunka uu bixiyo.</p>
        '
    ],
    'taariikhda-shiikha' => [
        'title' => 'Taariikhda Shiikha',
        'icon' => 'user',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Taariikhda Shiikh Cumar Al-Faaruuq</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro taariikhda nololeedka Shiikh Cumar Al-Faaruuq, waxbarashadiisa, macluumaadka uu ka helay culuumta diinta, iyo kaalintii uu ka qaatay horumarinta fahamka Qur\'aanka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Dhalashada iyo Koritaanka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Shiikh Cumar Al-Faaruuq wuxuu ku dhashay Soomaaliya, wuxuuna koray oo ku barbaaray goobta diinta. Waxbarashadiisa hore wuxuu ka helay culimada Soomaaliyeed ee ugu muhiimsan.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Waxbarashada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Shiikhu wuxuu waxbarasho dheeri ah ka helay culuumta diinta, gaar ahaan tafsiirka Qur\'aanka, hadiithka, iyo fiqhka. Wuxuu ka bartay culimada ugu muhiimsan ee caalamka Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Kaalinta</h3>
            <p class="text-gray-700 leading-relaxed">Shiikh Cumar Al-Faaruuq wuxuu kaalin muhiim ah ka qaatay horumarinta fahamka Qur\'aanka ee ummadda Soomaaliyeed. Tafsiirkiisa waa mid ay dadka ugu faa\'iideystaan.</p>
        '
    ],
    'axkaamta-cumrada' => [
        'title' => 'Axkaamta Cumrada',
        'icon' => 'sun',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Axkaamta Cumrada</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro axkaamta cumrada, shuruucda, sunnada, iyo waxyaabaha lagu furo cumrada. Waxbarasho dheeri ah oo ku saabsan maalmaha muhiimka ah ee cumrada.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Shuruucda Cumrada</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Niyadda cumrada</li>
                <li>Ka reebida wax cunida iyo cabitaanka</li>
                <li>Ka reebida jima\'ka</li>
                <li>Ka reebida hadalka xun</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Waxyaabaha Lagu Furo Cumrada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Waxyaabaha lagu furo cumrada waa: cunida iyo cabitaanka si ujeedada ah, jima\'ka, dhiig bixinta, iyo kuwo kale oo badan.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Sunnada Cumrada</h3>
            <p class="text-gray-700 leading-relaxed">Waxaa jira sunnado badan oo la raacayo marka la cumrayo, sida suhuurka, iftirka degdega ah, iyo akhriinta Qur\'aanka.</p>
        '
    ],
    'axkaamta-xajka' => [
        'title' => 'Axkaamta Xajka',
        'icon' => 'map',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Axkaamta Xajka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro axkaamta xajka, tilaabada, shuruucda, iyo waxyaabaha lagu furo xajka. Waxbarasho dheeri ah oo ku saabsan xajka iyo manasikada.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Shuruucda Xajka</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Islaamka</li>
                <li>Aqliga</li>
                <li>Baaliga</li>
                <li>Xoogga</li>
                <li>Maraagga</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Tilaabada Xajka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Tilaabada xajka waa: Ihraamka, Wuquufka Arafaat, Wuquufka Muzdalifah, Rameyga, iyo kuwo kale oo badan.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Waxyaabaha Lagu Furo Xajka</h3>
            <p class="text-gray-700 leading-relaxed">Waxyaabaha lagu furo xajka waa: jima\'ka, urdada, iyo kuwo kale oo badan marka la xajiyo.</p>
        '
    ],
    'islaamka' => [
        'title' => 'Islaamka',
        'icon' => 'shield',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Islaamka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro aasaaska Islaamka, arkaanka, shahaadada, salaadda, zakada, iyo dhammaan arimaha muhiimka ah ee diinta Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Aasaaska Islaamka</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Shahaadada: La ilaaha illaah, Muxamed waa rasuulka Ilaahay</li>
                <li>Salaadda: Salaadda shan waqti</li>
                <li>Zakada: Bixinta zakada</li>
                <li>Cumrada: Cumrada bisha Ramadaan</li>
                <li>Xajka: Xajka Makka</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Arkaanka Islaamka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Islaamku wuxuu leeyahay arkaan shan ah oo muhiim ah: Shahaadada, Salaadda, Zakada, Cumrada, iyo Xajka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Islaamka</h3>
            <p class="text-gray-700 leading-relaxed">Islaamku waa diin nololeed oo dhammaan qaybaha nolosha ka hadla, sida akhlaaqda, ganacsiga, iyo dhaqanka guud.</p>
        '
    ],
    'taariikhda-nabiga' => [
        'title' => 'Taariikhda Nabiga',
        'icon' => 'book-open',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Taariikhda Nebi Muxamed (SCW)</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro taariikhda nololeedka Nebi Muxamed (SCW), dhalashadiisa, nubuuwwadiisa, hijraddiisa, iyo dhammaan dhacdooyinka muhiimka ah ee taariikhda Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Dhalashada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Nebi Muxamed (SCW) wuxuu ku dhashay Makka sanadkii 570 C.D. Wuxuu ahaa qofka ugu horeeyay ee dhashay qoyska Haashim.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Nubuuwwada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Nebi Muxamed (SCW) wuxuu noqday nebi marka uu ahaa 40 jir. Wuxuu helay waxyiga ugu horeeyay ee Qur\'aanka ah.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Hijrada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Nebi Muxamed (SCW) wuxuu u hijrayay Madiina sanadkii 622 C.D. Hijraddu waa bilowga taariikhda Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Geerida</h3>
            <p class="text-gray-700 leading-relaxed">Nebi Muxamed (SCW) wuxuu geeriyooday Madiina sanadkii 632 C.D. Wuxuu ahaa 63 jir markuu geeriyooday.</p>
        '
    ],
    'axkaamta-salaadda' => [
        'title' => 'Axkaamta Salaadda',
        'icon' => 'clock',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Axkaamta Salaadda</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro axkaamta salaadda, shuruucda, sunnada, iyo waxyaabaha lagu furo salaadda. Waxbarasho dheeri ah oo ku saabsan salaadda iyo waqtiga ay tahay.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Shuruucda Salaadda</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Islaamka</li>
                <li>Aqliga</li>
                <li>Baaliga</li>
                <li>Taharra (Nadiifinta)</li>
                <li>Waqtiga salaadda</li>
                <li>Qiblada</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Waqtiga Salaadda</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Salaaddu waa shan: Fajr, Dhuhr, Asr, Maghrib, iyo Isha. Waa in la salaado waqtiga uu uu yahay.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Sunnada Salaadda</h3>
            <p class="text-gray-700 leading-relaxed">Waxaa jira sunnado badan oo la raacayo marka la salaado, sida siwaakka, du\'aada, iyo akhriinta suuradaha.</p>
        '
    ],
    'akhlaaqda-islaamka' => [
        'title' => 'Akhlaaqda Islaamka',
        'icon' => 'heart',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Akhlaaqda Islaamka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro akhlaaqda Islaamka, sida loo dhaqmo, xirfadaha wanaagsan, iyo dhammaan qaababka wanaagsan ee nolosha Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Akhlaaqda Wanaagsan</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Runta</li>
                <li>Amanaadka</li>
                <li>Ixtiraamka</li>
                <li>Naxariista</li>
                <li>Samirka</li>
                <li>Shukriga</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Akhlaaqda Xun</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Waxaa jira akhlaaqo xun oo Islaamku ina reebay, sida beena, khayaaminta, iyo dhibaato gelinta dadka kale.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Akhlaaqda</h3>
            <p class="text-gray-700 leading-relaxed">Akhlaaqdu waa qayb muhiim ah oo ka mid ah diinta Islaamka. Nebi Muxamed (SCW) wuxuu ahaa qofka ugu akhlaaqda wanaagsan.</p>
        '
    ],
    'fiqhka' => [
        'title' => 'Fiqhka',
        'icon' => 'scale',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Fiqhka Islaamka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro fiqhka Islaamka, qawaaniinta, go\'aamada, iyo dhammaan arimaha sharciga ah ee diinta Islaamka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Qaybaha Fiqhka</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Ibaadada: Salaadda, Cumrada, Zakada, Xajka</li>
                <li>Mu\'aamalaadka: Ganacsiga, Nikaaxa, Dhacdooyinka</li>
                <li>Jinaayada: Dembiyada iyo ciqaabka</li>
                <li>Ahkaamka: Go\'aamada sharciga</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Madaarifka Fiqhka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Waxaa jira madaarif badan oo fiqhka, sida Madaarifka Hanafi, Maaliki, Shaafi\'i, iyo Hambali.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Fiqhka</h3>
            <p class="text-gray-700 leading-relaxed">Fiqhku waa muhiim marka la doonayo in la fahmo sharciga Islaamka iyo sida loo dhaqmo diinta si sax ah.</p>
        '
    ],
    'hadiithka' => [
        'title' => 'Hadiithka',
        'icon' => 'message',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Hadiithka Nebi Muxamed (SCW)</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro hadiithka Nebi Muxamed (SCW), ahaanshaha, xaqiijinta, iyo dhammaan culuumta hadiithka.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Noocyada Hadiithka</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Hadiithka Sahiixa: Hadiithka xaqiijisay</li>
                <li>Hadiithka Hasana: Hadiithka wanaagsan</li>
                <li>Hadiithka Da\'iif: Hadiithka daciifka ah</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Kutubta Hadiithka</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Waxaa jira kutub badan oo hadiithka ah, sida Saaxixa Bukhaari, Saaxixa Muslim, Sunan Abu Daawuud, iyo kuwo kale.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Hadiithka</h3>
            <p class="text-gray-700 leading-relaxed">Hadiithku waa mabda\' muhiim ah oo lagu fahmo diinta Islaamka. Wuxuu ina caawiyaa in aan fahanno sida Nebi Muxamed (SCW) u dhaqmay.</p>
        '
    ],
    'aqoonta-diinta' => [
        'title' => 'Aqoonta Diinta',
        'icon' => 'lightbulb',
        'content' => '
            <h2 class="text-2xl font-bold text-[#004D40] mb-4">Aqoonta Diinta Islaamka</h2>
            <p class="text-gray-700 leading-relaxed mb-4 text-lg">Baro aqoonta diinta Islaamka, culuumta, iyo dhammaan arimaha muhiimka ah ee diinta iyo barashada.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Culuumta Diinta</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Tafsiirka: Fahamka Qur\'aanka</li>
                <li>Hadiithka: Barashada hadiithka</li>
                <li>Fiqhka: Fahamka sharciga</li>
                <li>Aqeedada: Iimaanka</li>
                <li>Taariikhda: Taariikhda Islaamka</li>
            </ul>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Muhiimadda Barashada</h3>
            <p class="text-gray-700 leading-relaxed mb-4">Barashada culuumta diinta waa muhiim marka la doonayo in la fahmo diinta Islaamka si dheeri ah iyo sida loo dhaqmo si sax ah.</p>
            
            <h3 class="text-xl font-semibold text-[#004D40] mt-6 mb-3">Sida Loo Bara</h3>
            <p class="text-gray-700 leading-relaxed">Waa in la kaashado culimada, la akhriyo kutubta, la dhageysto duruusada, iyo la dhaqmo waxa la bartay.</p>
        '
    ]
];

// Get content for current topic or default
$current_topic = isset($topics[$topic]) ? $topics[$topic] : $topics['fahamka-quranka'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($current_topic['title']) ?> - Tafsir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .calligraphy {
            font-family: 'Amiri', serif;
            font-size: 3rem;
            color: #D4AF37;
        }
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
        .dark-mode .text-gray-700 {
            color: #d1d1d1 !important;
        }
        .dark-mode .text-gray-600 {
            color: #d1d1d1 !important;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <?php include 'header.php'; ?>

    <main class="container mx-auto px-4 md:px-8 py-8 md:py-12">
        <!-- Breadcrumb -->
        <nav class="mb-6">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="index.php" class="hover:text-[#004D40] transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-[#004D40] font-medium"><?= htmlspecialchars($current_topic['title']) ?></li>
            </ol>
        </nav>

        <!-- Content Section -->
        <section class="relative max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-xl mb-10 border border-gray-200 overflow-hidden">
            <!-- Accent bar -->
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600"></div>
            
            <div class="relative">
                <div class="mb-6">
                    <h1 class="text-4xl md:text-5xl font-bold text-[#004D40] mb-3 tracking-tight">
                        <?= htmlspecialchars($current_topic['title']) ?>
                    </h1>
                    <div class="h-1 w-24 bg-gradient-to-r from-teal-600 via-teal-500 to-teal-600 rounded-full"></div>
                </div>

                <div class="prose prose-lg max-w-none">
                    <?= $current_topic['content'] ?>
                </div>
            </div>
        </section>

        <!-- Related Topics -->
        <section class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#004D40] mb-6">Mawduucyo La Xidhiidha</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <?php 
                $related_topics = array_slice($topics, 0, 3, true);
                foreach ($related_topics as $key => $topic_item): 
                    if ($key !== $topic):
                ?>
                <a href="readmore.php?topic=<?= $key ?>" 
                   class="block p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-200 border border-gray-200 hover:border-teal-400">
                    <h3 class="text-lg font-semibold text-[#004D40] mb-2"><?= htmlspecialchars($topic_item['title']) ?></h3>
                    <p class="text-sm text-gray-600">Akhri dheeraad ah...</p>
                </a>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        // Dark Mode Toggle Functionality
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const html = document.documentElement;

        const currentTheme = localStorage.getItem('theme') || 'light';
        
        if (currentTheme === 'dark') {
            html.classList.add('dark-mode');
            if (sunIcon) sunIcon.classList.add('hidden');
            if (moonIcon) moonIcon.classList.remove('hidden');
        } else {
            html.classList.remove('dark-mode');
            if (sunIcon) sunIcon.classList.remove('hidden');
            if (moonIcon) moonIcon.classList.add('hidden');
        }

        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', function() {
                html.classList.toggle('dark-mode');
                
                if (html.classList.contains('dark-mode')) {
                    localStorage.setItem('theme', 'dark');
                    if (sunIcon) sunIcon.classList.add('hidden');
                    if (moonIcon) moonIcon.classList.remove('hidden');
                } else {
                    localStorage.setItem('theme', 'light');
                    if (sunIcon) sunIcon.classList.remove('hidden');
                    if (moonIcon) moonIcon.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>

