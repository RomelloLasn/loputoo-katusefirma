
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaleht - Saabtehtud OÜ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    
    <section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/473317870_590069857206643_6268164033222356348_n (1).jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <header class="relative z-10 container mx-auto flex flex-col md:flex-row justify-between items-center px-4 py-4">
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
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
            <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300 mt-4 md:mt-0 hidden md:inline-block">
                Võta ühendust
            </a>
        </header>
        <div id="mobileMenu" class="md:hidden hidden absolute z-30 left-0 right-0 px-4 pt-2 pb-4 bg-black border-t border-gray-800">
            <a href="/" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Avaleht</a>
            <a href="{{ route('services') }}" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Teenused</a>
            <a href="{{ route('contact') }}" class="block py-2 text-sm text-gray-200 hover:text-yellow-400">Kontakt</a>
        </div>
        <div class="relative z-10 container mx-auto text-center px-2 py-24 md:py-40">
            <h1 class="text-2xl md:text-4xl font-bold text-yellow-400 mb-4">Saabtehtud OÜ – Katustööd, mis saavad tehtud!</h1>
            <p class="text-white mb-8 text-base md:text-lg">
                Usaldusväärne Eesti ettevõte, mis pakub kvaliteetseid katuse- ja plekitöid üle kogu Eesti. Meie töö on professionaalne, aus ja alati kokkulepitud ajal.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-full transition duration-300">
                    Võta ühendust
                </a>
                <a href="{{ route('services') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                    Vaata teenuseid
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-2 md:px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-6">Meist</h2>
                <p class="text-black mb-4">
                    Saabtehtud OÜ on usaldusväärne Eesti ettevõte, mis pakub kvaliteetseid katuse- ja plekitöid üle kogu Eesti. Meie eesmärk on teha asju hästi – nii, et töö oleks mitte ainult tehtud, vaid saab tehtud õigesti, professionaalselt ja õigel ajal.
                </p>
                <p class="text-black">
                    Pakume laia valikut teenuseid: ehitame ja renoveerime katuseid (plekk, eterniit, kärg, kivi, SBS rullmaterjal), paigaldame vihmaveesüsteeme, valmistame ja paigaldame lisaplekke (aknaplekid, sokliplekid, korstnamütsid jpm), uuendame tuulekaste, teostame katusepesu, värvimist ning lumekoristust.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/pkatus2.jpg') }}" alt="Meist" class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </section>

    
    <section class="bg-black py-12 md:py-16">
        <div class="container mx-auto px-2 md:px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-6 text-center">Galerii / Tehtud tööd</h2>
            <p class="text-gray-400 text-center mb-8">Fotod tehtud objektidest (enne-pärast pildid, detailid, tööprotsessid).</p>
            <div class="flex flex-wrap justify-center gap-2 mb-8">
                <button class="gallery-filter bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300" data-filter="all">
                    Kõik
                </button>
                <button class="gallery-filter bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300" data-filter="katuseehitus">
                    Katuseehitus
                </button>
                <button class="gallery-filter bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300" data-filter="muudprojektid">
                    Muud projektid
                </button>
            </div>
            <div class="relative">
                <div id="galleryGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 overflow-hidden">
                    @php
                        $imageDir = public_path('images');
                        $images = [];
                        $muudProjektid = ['12.jpg', '13.jpg', 'yep.jpg', 'kiik.jpg', 'kiik2.jpg', 'yep2.jpg', 'yep3.jpg'];
                        if (file_exists($imageDir)) {
                            $files = scandir($imageDir);
                            foreach ($files as $file) {
                                if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
                                    if (str_contains($file, 'katus')) {
                                        $category = 'katuseehitus';
                                    } elseif (in_array($file, $muudProjektid)) {
                                        $category = 'muudprojektid';
                                    } else {
                                        $category = null;
                                    }
                                    if ($category) {
                                        $images[] = [
                                            'src' => asset('images/' . $file),
                                            'category' => $category
                                        ];
                                    }
                                }
                            }
                        }
                    @endphp
                    @foreach($images as $img)
                        <div class="gallery-item {{ $img['category'] }} bg-gray-700 h-56 md:h-64 rounded-lg shadow-lg">
                            <img src="{{ $img['src'] }}" alt="Gallery Image" class="w-full h-full object-cover rounded-lg">
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center items-center gap-4 mt-6">
                    <button id="galleryPrev" class="bg-black bg-opacity-60 hover:bg-yellow-400 text-white hover:text-black rounded-full p-3 transition duration-300" aria-label="Eelmine">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button id="galleryNext" class="bg-black bg-opacity-60 hover:bg-yellow-400 text-white hover:text-black rounded-full p-3 transition duration-300" aria-label="Järgmine">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-12 md:py-16 bg-black">
        <div class="container mx-auto px-2 md:px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-6 text-center">Enne ja Pärast</h2>
            <p class="text-gray-400 text-center mb-8">Vaata, kuidas meie töö muudab katuseid ja fassaade.</p>
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-20">
                <div class="relative group w-full max-w-md h-48 md:h-64">
                    <img src="{{ asset('images/enne.jpg') }}" alt="Enne" class="rounded-lg shadow-lg w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-yellow-400">Enne</h3>
                    </div>
                </div>
                <div class="text-yellow-400 text-3xl md:text-4xl font-bold my-4 lg:my-0">
                    &gt;
                </div>
                <div class="relative group w-full max-w-md h-48 md:h-64">
                    <img src="{{ asset('images/parast.jpg') }}" alt="Pärast" class="rounded-lg shadow-lg w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-yellow-400">Pärast</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-20 mt-8 md:mt-12">
                <div class="relative group w-full max-w-md h-48 md:h-64">
                    <img src="{{ asset('images/enne2.jpg') }}" alt="Enne" class="rounded-lg shadow-lg w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-yellow-400">Enne</h3>
                    </div>
                </div>
                <div class="text-yellow-400 text-3xl md:text-4xl font-bold my-4 lg:my-0">
                    &gt;
                </div>
                <div class="relative group w-full max-w-md h-48 md:h-64">
                    <img src="{{ asset('images/parast2.jpg') }}" alt="Pärast" class="rounded-lg shadow-lg w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-yellow-400">Pärast</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-2 md:px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-6 text-center">Tagasiside / Arvustused</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-bold text-black mb-4">Töö kiire ja korralik!</h3>
                    <p class="text-gray-600 mb-4">“Töö kiire ja korralik! Soovitan kindlasti.”</p>
                    <div class="text-blue-500 hover:text-blue-600 font-bold transition duration-300">Rahulolev klient -</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-bold text-black mb-4">Katus sai nii hea!</h3>
                    <p class="text-gray-600 mb-4">“Katus sai nii hea, et naabridki küsivad ehitaja kontakte.”</p>
                    <div class="text-blue-500 hover:text-blue-600 font-bold transition duration-300">Rahulolev klient -</div>
                </div>
            </div>
        </div>
    </section>

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

            const filterButtons = document.querySelectorAll('.gallery-filter');
            const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
            let currentFilter = 'all';
            const itemsPerPage = 6;
            let currentPage = 0;
            let filteredItems = galleryItems;

            function updateGallery() {
                galleryItems.forEach(item => item.style.display = 'none');
                const start = currentPage * itemsPerPage;
                const end = start + itemsPerPage;
                filteredItems.slice(start, end).forEach(item => item.style.display = '');
            }

            filterButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterButtons.forEach(b => {
                        b.classList.remove('bg-yellow-400', 'text-black');
                        b.classList.add('bg-gray-700', 'text-white');
                    });
                    btn.classList.add('bg-yellow-400', 'text-black');
                    btn.classList.remove('bg-gray-700', 'text-white');
                    currentFilter = btn.getAttribute('data-filter');
                    filteredItems = galleryItems.filter(item => currentFilter === 'all' || item.classList.contains(currentFilter));
                    currentPage = 0;
                    updateGallery();
                });
            });

            document.getElementById('galleryPrev').addEventListener('click', function() {
                if (currentPage > 0) {
                    currentPage--;
                    updateGallery();
                }
            });
            document.getElementById('galleryNext').addEventListener('click', function() {
                if ((currentPage + 1) * itemsPerPage < filteredItems.length) {
                    currentPage++;
                    updateGallery();
                }
            });

            filteredItems = galleryItems;
            updateGallery();
        });
    </script>
</body>
</html>