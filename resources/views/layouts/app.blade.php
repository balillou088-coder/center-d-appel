```blade
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
</head>

<body class="bg-slate-50 text-slate-900">

    {{-- Navbar --}}
    <header class="fixed top-0 left-0 right-0 z-50 h-16 bg-white border-b border-slate-200">

        <div class="h-full px-6 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">

                <div class="w-9 h-9 rounded-lg bg-red-600 flex items-center justify-center">
                    <i data-lucide="phone-call" class="w-5 h-5 text-white"></i>
                </div>

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

                <a href="#guides" class="text-slate-600 hover:text-red-600 transition">
                    Guides
                </a>

                <a href="#faq" class="text-slate-600 hover:text-red-600 transition">
                    Questions fréquentes
                </a>

                <a href="#support" class="text-slate-600 hover:text-red-600 transition">
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


                        <a href="#appels"
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


                        <a href="#rapports"
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
    </script>

</body>

</html>
