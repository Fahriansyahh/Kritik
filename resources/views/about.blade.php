<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Digital Komunikasi Nusantara</title>
    <!--
        For more customization options, we would advise
        you to build your TailwindCSS from the source.
        https://tailwindcss.com/docs/installation
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=bolt" />
    <!-- Small CSS to Hide elements at 1520px size -->
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
    </style>
</head>

<body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-auto h-6">
                <span class="ml-3 text-xl text-gray-800 font-serif">Pt Digital Komunikasi Nusantara</span>

            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="#"
                    class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Beranda</a>

                <a href="#layanan" class="font-bold duration-100 transition-color hover:text-indigo-600">Layanan
                    Kami</a>
                <a href="#contacts"
                    class="ml-0 font-bold duration-100 md:ml-3 lg:ml-8 transition-color hover:text-indigo-600">Hubungi
                    Kami</a>

            </nav>



            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>
    <!-- End Header Section-->

    <!-- BEGIN HERO SECTION -->
    <div
        class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-20 xl:pt-40 xl:pb-64 bg-blue-600">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-white sm:text-6xl xl:mb-8">
                    PT. Digital Komunikasi Nusantara
                </h1>
                <p class="pr-0 mb-8 text-base text-white sm:text-lg xl:text-xl lg:pr-20">
                    Kelola transaksi dan pembayaran bisnis Anda dengan cepat, aman, dan tanpa repot. Solusi payment
                    gateway terpercaya untuk semua kebutuhan Anda.
                </p>
                <a href="/saran-kritik"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-green-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">
                    Kritik saran
                </a>

                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%"
                            id="linearGradient-1">
                            <stop stop-color="#5C54DB" offset="0%" />
                            <stop stop-color="#6A82E7" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                            id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="{{ asset('images/pay.png') }}"
                        class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">
                </div>
            </div>
        </div>
    </div>

    <!-- HERO SECTION END -->





    <!-- Start Testimonials -->
    <div id="layanan"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto k">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-6xl px-8 mx-auto text-center">
                    <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">
                        Apa yang Kami Tawarkan
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        Layanan Kami
                    </h2>
                    <p class="my-6 text-xl font-medium text-gray-500">
                        Kami menyediakan solusi pembayaran digital yang aman, cepat, dan mudah digunakan untuk kebutuhan
                        pribadi maupun bisnis.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-6 mt-8 items-center  w-full">

                        <div class=""><img class="h-40 object-contain mx-auto"
                                src="{{ asset('images/indosat.jpg') }}" alt="Indosat"></div>
                        <div><img class="h-40 object-contain mx-auto" src="{{ asset('images/telkomsel.jpg') }}"
                                alt="Telkomsel"></div>
                        <div><img class="h-40 object-contain mx-auto" src="{{ asset('images/xl.jpg') }}"
                                alt="XL Axiata"></div>
                        <div><img class="h-40 object-contain mx-auto" src="{{ asset('images/bank.jpg') }}"
                                alt="Axis"></div>
                        <div><img class="h-40 object-contain mx-auto" src="{{ asset('images/tri.jpg') }}"
                                alt="Tri"></div>
                        <div><img class="h-40 object-contain mx-auto" src="{{ asset('images/smartfren.jpg') }}"
                                alt="Smartfren"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="layanan" class="w-full border-t border-gray-200 px-6 py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="max-w-6xl mx-auto text-center ">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 ">Hubungi Kami</h2>
            <p class="mt-4 text-lg sm:text-xl text-gray-500 font-medium">
                Kami siap membantu Anda. Jangan ragu untuk menghubungi tim kami untuk informasi lebih lanjut,
                kerja sama bisnis, atau bantuan teknis.
            </p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 text-left text-gray-700 text-lg">
                <!-- Kontak Info -->
                <div class="space-y-5">
                    <div>
                        <span class="font-semibold">Telepon / WhatsApp:</span><br>
                        <a href="https://wa.me/6281210627762" class="text-indigo-600 hover:underline">
                            📞 +62 812-1062-7762
                        </a>
                    </div>
                    <div>
                        <span class="font-semibold">Alamat:</span><br>
                        <p>Jalan Salvia Blok Ub No. 15, RT.1/RW.6, Rw Buntu, Rawabuntu, Serpong, Kota Tangerang Selatan,
                            Banten</p>
                    </div>
                    <div>
                        <span class="font-semibold">Email:</span><br>
                        <a href="mailto:info@digitalnusantara.co.id" class="text-indigo-600 hover:underline">
                            ✉️ info@digitalnusantara.co.id
                        </a>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="space-y-4" id="contacts">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.280035801262!2d106.67633857498624!3d-6.303602561710993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbe1265e9c99%3A0x8a06c27f25ccf878!2sJalan%20Salvia%20Blok%20Ub%20No.%2015%2C%20RT.1%2FRW.6%2C%20Rw%20Buntu%2C%20Rawabuntu%2C%20SERPONG%2C%20KOTA%20TANGERANG%20SELATAN%2C%20BANTEN!5e0!3m2!1sen!2sid!4v1717685148907!5m2!1sen!2sid"
                        width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://www.google.com/maps/place/6%C2%B018'13.0%22S+106%C2%B040'44.1%22E"
                        target="_blank" class="text-indigo-600 hover:underline">
                        📍 Lihat di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>


    <footer class="px-4  pt-12 pb-8 text-white bg-blue-600 border-t border-gray-200">
        <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
            <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left ">
                <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-auto h-6">
                    <span class="ml-3 text-xl text-white font-serif">Pt Digital Komunikasi Nusantara</span>

                </a>

            </div>
            <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                <ul class="flex flex-col w-full p-0 font-medium text-left text-white list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-white uppercase md:mt-0">
                        Product</li>
                    <li><a href="#"
                            class="inline-block px-3 py-2 text-white no-underline hover:text-gray-600">Beranda</a>
                    </li>
                    <li><a href="#layanan"
                            class="inline-block px-3 py-2 text-white no-underline hover:text-gray-600">Layanan
                            Kami</a>
                    </li>
                    <li><a href="#contacts"
                            class="inline-block px-3 py-2 text-white no-underline hover:text-gray-600">Hubungi
                            Kami</a>
                    </li>

                </ul>

                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-white uppercase md:mt-0">
                        Hubungi Kami
                    </li>
                    <li><a href="https://wa.me/6281210627762"
                            class="inline-block px-3 py-2 text-white no-underline hover:text-gray-600">Telephone:
                            +62 812-1062-7762</a></li>
                    <li><a href="https://www.google.com/maps/place/6%C2%B018'13.0%22S+106%C2%B040'44.1%22E/@-6.3036026,106.6763386,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-6.3036026!4d106.6789135?entry=ttu&g_ep=EgoyMDI1MDYwMy4wIKXMDSoASAFQAw%3D%3D"
                            class="inline-block px-3 py-2 text-white no-underline hover:text-gray-600">Alamat: Jalan
                            Salvia Blok Ub No. 15, RT.1/RW.6, Rw Buntu, Rawabuntu, SERPONG, KOTA
                            TANGERANG SELATAN, BANTEN</a></li>


                </ul>

            </div>
        </div>
        <div class="pt-4  mt-10 text-center text-white border-t border-gray-100">© fadly al shaky 2025
        </div>


    </footer>

    <!-- a little JS for the mobile nav button -->
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function() {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>

</html>
