<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Arti Web Docs')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
            transition: opacity .45s ease, visibility .45s ease;
        }

        #preloader.preloader-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .preloader-ring {
            position: relative;
            width: 88px;
            height: 88px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preloader-ring::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 9999px;
            border: 3px solid #fee2e2;
            border-top-color: #dc2626;
            animation: preloader-spin .9s linear infinite;
        }

        .preloader-ring img {
            width: 44px;
            height: 44px;
            object-fit: contain;
            animation: preloader-pulse 1.4s ease-in-out infinite;
        }

        @keyframes preloader-spin {
            to { transform: rotate(360deg); }
        }

        @keyframes preloader-pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(.92); opacity: .7; }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .scroll-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    {{-- Preloader --}}
    <div id="preloader">

        <div class="flex flex-col items-center gap-4">

            <div class="preloader-ring">
                <img src="{{ asset('images/logo.png') }}" alt="Arti Web">
            </div>

            <span class="text-sm font-medium text-slate-400">
                Chargement...
            </span>

        </div>

    </div>

    {{-- Navbar --}}
    <header class="fixed top-0 left-0 right-0 z-50 h-16 bg-white border-b border-slate-200">

        <div class="h-full px-6 flex items-center justify-between">

            {{-- Logo --}}
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">

                <img src="{{ asset('images/logo.png') }}" alt="Arti Call Logo" class="h-14 w-auto object-contain">

                <div>
                    <h1 class="font-bold text-lg leading-none">
                        Arti Web
                    </h1>

                    <span class="text-xs text-slate-500">
                        Documentation
                    </span>
                </div>

            </a>


            {{-- Navigation --}}
            <nav class="hidden md:flex items-center gap-7 text-sm">

                <a href="{{ url('/') }}" class="text-slate-600 hover:text-red-600 transition">
                    Accueil
                </a>

                <a href="{{ route('guides') }}">Guides</a>

                <a href="{{ route('faq') }}" class="text-slate-600 hover:text-red-600 transition">
                    Questions fréquentes
                </a>

                <a href="{{ route('support') }}" class="text-slate-600 hover:text-red-600 transition">
                    Support
                </a>

            </nav>


            {{-- Search --}}
            <div class="hidden lg:flex items-center">

                <div class="relative">

                    <i data-lucide="search"
                        class="absolute left-3 top-1/2 -translate-y-1/2
                              w-4 h-4 text-slate-400">
                    </i>

                    <input type="text" placeholder="Rechercher..."
                        class="w-64 pl-10 pr-4 py-2
                               bg-slate-100
                               border border-transparent
                               rounded-lg
                               text-sm
                               outline-none
                               focus:bg-white
                               focus:border-red-300
                               focus:ring-2
                               focus:ring-red-100">

                </div>

            </div>

        </div>

    </header>


    {{-- Main --}}
    <div class="pt-16">

        <div class="flex min-h-[calc(100vh-4rem)]">


            {{-- Sidebar --}}
            <aside class="hidden lg:block w-64 shrink-0
                          bg-white border-r border-slate-200">

                <div class="sticky top-16 p-5">

                    <p
                        class="px-3 mb-3 text-xs font-semibold
                              uppercase tracking-wider text-slate-400">
                        Documentation
                    </p>


                    <nav class="space-y-1">

                        <a href="#connexion"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="log-in" class="w-4 h-4"></i>

                            <span>
                                Connexion et comptes
                            </span>

                        </a>


                        <a href="{{ route('guides.appels') }}"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="phone" class="w-4 h-4"></i>

                            <span>
                                Gestion des appels
                            </span>

                        </a>


                        <a href="#clients"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="users" class="w-4 h-4"></i>

                            <span>
                                Clients et contacts
                            </span>

                        </a>


                        <a href="{{ route('statistiques') }}"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="bar-chart-3" class="w-4 h-4"></i>

                            <span>
                                Rapports et statistiques
                            </span>

                        </a>


                        <a href="#administration"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="settings" class="w-4 h-4"></i>

                            <span>
                                Administration
                            </span>

                        </a>


                        <a href="#faq"
                            class="flex items-center gap-3 px-3 py-2.5
                                  rounded-lg text-sm
                                  text-slate-600
                                  hover:bg-red-50
                                  hover:text-red-600
                                  transition">

                            <i data-lucide="circle-help" class="w-4 h-4"></i>

                            <span>
                                FAQ & dépannage
                            </span>

                        </a>

                    </nav>


                    {{-- Support Card --}}
                    <div class="mt-8 p-4 rounded-xl bg-red-50 border border-red-100">

                        <div class="flex items-center gap-2 mb-2">

                            <i data-lucide="headphones" class="w-4 h-4 text-red-600">
                            </i>

                            <span class="font-semibold text-sm">
                                Besoin d'aide ?
                            </span>

                        </div>

                        <p class="text-xs leading-5 text-slate-500 mb-3">
                            Une question ou un problème ?
                            Contactez notre équipe technique.
                        </p>

                        <a href="#support"
                            class="text-xs font-semibold text-red-600
                                  hover:text-red-700">
                            Contacter le support →
                        </a>

                    </div>

                </div>

            </aside>


            {{-- Content --}}
            <main class="flex-1 min-w-0">

                @yield('content')

            </main>

        </div>

    </div>


    {{-- Footer --}}
    <footer class="border-t border-slate-200 bg-white">

        <div
            class="max-w-7xl mx-auto px-6 py-6
                    flex flex-col md:flex-row
                    justify-between items-center gap-3">

            <p class="text-sm text-slate-500">
                © {{ date('Y') }} Arti Web Docs
            </p>

            <div class="flex items-center gap-5 text-sm text-slate-500">

                <a href="#faq" class="hover:text-red-600">
                    FAQ
                </a>

                <a href="#support" class="hover:text-red-600">
                    Support
                </a>

            </div>

        </div>

    </footer>


    <script>
        lucide.createIcons();

        // Animation au défilement : chaque <section> du contenu
        // apparaît en fondu quand elle entre dans l'écran.
        document.querySelectorAll('main section').forEach(function (el, i) {
            el.classList.add('scroll-reveal');
            el.style.transitionDelay = (i % 3) * 0.08 + 's';
        });

        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

        document.querySelectorAll('main section').forEach(function (el) {
            revealObserver.observe(el);
        });

        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader');
            if (preloader) {
                setTimeout(function () {
                    preloader.classList.add('preloader-hidden');
                    setTimeout(function () {
                        preloader.remove();
                    }, 500);
                }, 350);
            }
        });
    </script>

</body>

</html>
