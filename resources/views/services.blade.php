
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    

<section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/pkatus2.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <header class="relative z-10 container mx-auto flex flex-col md:flex-row justify-between items-center px-4 py-4 gap-4 md:gap-0">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/Adobe Express - file.png') }}" alt="SAABTEHTUD OÜ" class="h-10 w-10">
            <span class="text-xl font-bold text-white">SaabTehtud OÜ</span>
        </div>
        <button id="burger" class="md:hidden text-yellow-400 focus:outline-none" aria-label="Ava menüü">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="/" class="hover:text-yellow-400 text-white transition duration-300">Avaleht</a>
            <a href="{{ route('services') }}" class="hover:text-yellow-400 text-white transition duration-300">Teenused</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-400 text-white transition duration-300">Kontakt</a>
        </nav>
        <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300 hidden md:inline-block">
            Võta ühendust
        </a>
    </header>
    <div id="mobileMenu" class="md:hidden hidden absolute z-30 left-0 right-0 px-4 pt-2 pb-4 bg-black border-t border-gray-800">
        <a href="/" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Avaleht</a>
        <a href="{{ route('services') }}" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Teenused</a>
        <a href="{{ route('contact') }}" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Kontakt</a>
    </div>
    <div class="relative z-10 container mx-auto text-center px-2 py-20 md:py-40">
        <h1 class="text-2xl md:text-4xl font-bold text-yellow-400 mb-4">Teenused</h1>
        <p class="text-white mb-8 text-base md:text-lg">
            Pakume laia valikut katuse- ja plekitöid, mis on professionaalsed, ausad ja alati kokkulepitud ajal tehtud.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-full transition duration-300">
                Võta ühendust
            </a>
        </div>
    </div>
</section>

<main class="container mx-auto py-12 px-2 md:px-4">
    <div class="space-y-12">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold text-yellow-400">Katuseehitus ja -renoveerimine</h2>
                <p class="text-gray-400 mt-4">
                    Uue katuse paigaldamine või vana katuse renoveerimine aitab vältida lekkeid ja struktuurilisi kahjustusi, mis võivad põhjustada suuri remondikulusid.
                    Teostame plekk-, eterniit-, kärg-, kivi- ja SBS rullmaterjalist katuste ehitust ja renoveerimist. Meie teenus hõlmab kõiki tööetappe alates vana katuse demonteerimisest kuni uue katuse paigaldamiseni.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/pkatus7.jpg') }}" alt="Katuseehitus" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2 order-2 md:order-1 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/pkatus3.jpg') }}" alt="Vihmaveesüsteemid" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
            <div class="w-full md:w-1/2 order-1 md:order-2">
                <h2 class="text-2xl font-bold text-yellow-400">Vihmaveesüsteemide paigaldus</h2>
                <p class="text-gray-400 mt-4">
                    Vihmaveesüsteem on oluline investeering, kuna see suunab sademevee õigesse kohta, et kaitsta maja fassaadi ja soklit veekahjustuste eest.
                    Kvaliteetne vee äravoolu lahendus igale katusele.
                </p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold text-yellow-400">Tuulekastide ehitus ja renoveerimine</h2>
                <p class="text-gray-400 mt-4">
                    Tuulekastid tagavad katuse ventilatsiooni, mis aitab vältida niiskuse ja hallitusseente kogunemist, ning annavad katusele viimistletud välimuse.
                    Mõnikord piisab olemasoleva tuulekasti puhul mõne laua vahetusest, kui puit on pehkinud, siis on vaja kogu tuulekast uuesti ehitada.
                    Ehitame või renoveerime olemasolevad tuulekastid.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden relative group">
                    <span class="text-gray-400">—</span>
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-yellow-400 text-2xl font-bold">Tulekul</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2 order-2 md:order-1 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/pkatus.jpg') }}" alt="Katusepesu" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
            <div class="w-full md:w-1/2 order-1 md:order-2">
                <h2 class="text-2xl font-bold text-yellow-400">Katusepesu ja värvimine</h2>
                <p class="text-gray-400 mt-4">
                    Vahepeal piisab katusele uue ilme loomisest ka ainult pesust, pleekinud katus vajaks aga uut värvikihti.
                    Peseme ja vajadusel ka värvime plekk-, eterniit- ja kivikatuseid.
                </p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold text-yellow-400">Lumekoristus</h2>
                <p class="text-gray-400 mt-4">
                    Regulaarne lumekoristus hoiab katuse struktuuri tervena, kaitseb selle pikaealisust ja aitab vältida tõsiseid kahjustusi. Kui lumi koguneb katusele, suureneb koormus, mis võib põhjustada katuse väsimist, painutamist ja isegi katuse struktuuri kahjustusi. Kui lumi sulab ja külmub, tekib jää, mis võib tungida katuse materjalidesse ja põhjustada pragusid, mis omakorda viib veekahjustusteni.
                    Eemaldame turvaliselt raske lume katustelt.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/473595101_586221377591491_4932322190208950287_n (1).jpg') }}" alt="Lumekoristus" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="w-full md:w-1/2 order-2 md:order-1 mt-4 md:mt-0">
                <div class="bg-gray-700 h-48 md:h-64 rounded-lg w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/parast2.jpg') }}" alt="Plekitööd" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
            <div class="w-full md:w-1/2 order-1 md:order-2">
                <h2 class="text-2xl font-bold text-yellow-400">Plekitööd</h2>
                <p class="text-gray-400 mt-4">
                    Plekitööd on olulised igasuguste katuste ja fassaadide vastupidavuse tagamiseks. Lisaplekid annavad majale tervikliku ilme, aga kaitsevad ka maja ilmastiku mõju eest.
                    Valmistame ja paigaldame erinevaid lisaplekke: aknaplekid, sokliplekid, korstnamütsid, nurgaliistud jpm.
                </p>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-white">
                Tööd teostame üle Eesti – kiirelt, korralikult ja vastutustundlikult.
            </p>
        </div>
    </div>
</main>

<footer class="bg-black text-white py-12">
        <div class="container mx-auto px-2 md:px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">Saabtehtud OÜ</h3>
                    <p class="text-sm text-gray-400">Registrikood: 16572649</p>
                    <p class="text-sm text-gray-400">© Saabtehtud OÜ {{ date('Y') }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Lingid</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Avaleht</a></li>
                        <li><a href="{{ route('services') }}" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Teenused</a></li>
                        <li><a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const burger = document.getElementById('burger');
        const mobileMenu = document.getElementById('mobileMenu');
        burger.addEventListener('click', function (e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });
        document.addEventListener('click', function(e) {
            if (!mobileMenu.classList.contains('hidden') && !mobileMenu.contains(e.target) && e.target !== burger) {
                mobileMenu.classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>