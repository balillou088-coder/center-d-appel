```blade
@extends('layouts.app')

@section('title', 'Guides | Arti Web Documentation')

@section('content')

    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-10">

        {{-- =========================
        PAGE HEADER
    ========================== --}}
        <div class="mb-10">

            <div class="flex items-center gap-2 mb-4">
                <span
                    class="inline-flex items-center gap-2
                         px-3 py-1.5
                         rounded-full
                         bg-red-50
                         border border-red-100
                         text-[11px] font-semibold
                         tracking-wide
                         text-red-600">
                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                    Documentation
                </span>
            </div>

            <div
                class="flex flex-col lg:flex-row
                    lg:items-end
                    lg:justify-between
                    gap-6">

                <div class="max-w-3xl">
                    <h1 class="mt-5 text-3xl sm:text-4xl lg:text-5xl
           font-bold tracking-tight text-slate-900">

                        <span class="text-blue-700">
                            Guides
                        </span>

                        <span class="text-red-600">
                            d'utilisation
                        </span>

                    </h1>

                    <p
                        class="mt-4 text-[15px]
                          leading-7
                          tracking-[-0.005em]
                          text-slate-500">
                        Retrouvez les ressources nécessaires pour comprendre,
                        utiliser et administrer efficacement la plateforme
                        <span class="font-semibold text-slate-700">
                            Arti Web
                        </span>.
                    </p>

                </div>

                {{-- Documentation disponible --}}
                <div
                    class="group relative inline-flex items-center gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/60
                           backdrop-blur-xl
                           border border-slate-200/80
                           text-slate-700
                           text-[13px] font-semibold
                           tracking-[-0.005em]
                           cursor-default
                           overflow-hidden
                           transition-all duration-500
                           hover:-translate-y-0.5
                           hover:border-blue-200
                           hover:bg-white/80
                           hover:shadow-[0_8px_30px_rgba(37,99,235,0.10)]">

                    {{-- Shimmer léger --}}
                    <span
                        class="absolute inset-0
                               -translate-x-full
                               bg-gradient-to-r
                               from-transparent
                               via-white/70
                               to-transparent
                               group-hover:translate-x-full
                               transition-transform
                               duration-1000
                               pointer-events-none">
                    </span>

                    {{-- Point vert animé --}}
                    <span class="relative flex w-2.5 h-2.5 z-10">

                        {{-- Glow --}}
                        <span
                            class="absolute inset-0
                                   rounded-full
                                   bg-green-400
                                   opacity-40
                                   animate-[statusGlow_2s_ease-in-out_infinite]">
                        </span>

                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>

                    Documentation disponible

                </div>

            </div>

        </div>


        {{-- =========================
        SEARCH
    ========================== --}}
        <div class="mb-10">

            <div class="relative max-w-2xl">

                <i data-lucide="search"
                    class="absolute left-4 top-1/2
                      -translate-y-1/2
                      w-5 h-5
                      text-slate-400">
                </i>

                <input type="text" placeholder="Rechercher dans la documentation..."
                    class="w-full
                       pl-12 pr-4 py-3.5
                       bg-white
                       border border-slate-200
                       rounded-xl
                       text-sm
                       text-slate-700
                       placeholder:text-slate-400
                       outline-none
                       shadow-sm
                       transition

                       focus:border-red-300
                       focus:ring-4
                       focus:ring-red-50">

            </div>
        </div>


        {{-- =========================
        GUIDE GRID
    ========================== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            {{-- CONNEXION --}}
            <a href="#connexion" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                            <i data-lucide="log-in" class="w-5 h-5 text-red-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            01
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-red-600
                                   transition">
                            Connexion & comptes
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Apprenez à vous connecter,
                            gérer votre compte et
                            modifier vos informations.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-red-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-blue-50
                                   flex items-center justify-center
                                   group-hover:bg-red-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-blue-600 group-hover:text-red-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>


            {{-- APPELS --}}
            <a href="#appels" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                            <i data-lucide="phone" class="w-5 h-5 text-blue-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            02
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-blue-600
                                   transition">
                            Gestion des appels
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Gérez les appels entrants et sortants,
                            consultez l'historique et suivez
                            les communications.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-blue-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-red-50
                                   flex items-center justify-center
                                   group-hover:bg-blue-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-red-600 group-hover:text-blue-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>


            {{-- CLIENTS --}}
            <a href="#clients" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                            <i data-lucide="users" class="w-5 h-5 text-red-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            03
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-red-600
                                   transition">
                            Clients & contacts
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Consultez, recherchez et gérez
                            les informations relatives
                            aux clients et contacts.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-red-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-blue-50
                                   flex items-center justify-center
                                   group-hover:bg-red-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-blue-600 group-hover:text-red-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>


            {{-- RAPPORTS --}}
            <a href="#rapports" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                            <i data-lucide="bar-chart-3" class="w-5 h-5 text-blue-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            04
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-blue-600
                                   transition">
                            Rapports & statistiques
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Analysez les performances grâce
                            aux rapports et indicateurs
                            disponibles.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-blue-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-red-50
                                   flex items-center justify-center
                                   group-hover:bg-blue-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-red-600 group-hover:text-blue-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>


            {{-- ADMINISTRATION --}}
            <a href="#administration" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                            <i data-lucide="settings" class="w-5 h-5 text-red-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            05
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-red-600
                                   transition">
                            Administration
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Configurez la plateforme et
                            gérez les paramètres réservés
                            aux administrateurs.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-red-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-blue-50
                                   flex items-center justify-center
                                   group-hover:bg-red-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-blue-600 group-hover:text-red-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>


            {{-- FAQ --}}
            <a href="#faq" class="group">
                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                            <i data-lucide="circle-help" class="w-5 h-5 text-blue-600"></i>
                        </div>

                        <span class="text-[11px] font-semibold tracking-wider text-slate-400">
                            06
                        </span>

                    </div>

                    <div class="mt-6">

                        <h2
                            class="text-[17px]
                                   font-bold
                                   tracking-[-0.01em]
                                   leading-6
                                   text-slate-900
                                   group-hover:text-blue-600
                                   transition">
                            FAQ & dépannage
                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">
                            Consultez les questions fréquentes
                            et trouvez rapidement des solutions
                            aux problèmes courants.
                        </p>

                    </div>

                    <div
                        class="mt-6 pt-5 border-t border-slate-100
                               flex items-center justify-between">

                        <span
                            class="text-[13px]
                                   font-semibold
                                   tracking-[-0.005em]
                                   text-blue-600">
                            Lire le guide
                        </span>

                        <span
                            class="w-8 h-8 rounded-lg
                                   bg-red-50
                                   flex items-center justify-center
                                   group-hover:bg-blue-50
                                   transition">

                            <i data-lucide="arrow-right" class="w-4 h-4 text-red-600 group-hover:text-blue-600">
                            </i>

                        </span>

                    </div>
                </div>
            </a>

        </div>


        {{-- =========================
        SUPPORT
    ========================== --}}
        <div class="mt-10">

            <div
                class="relative overflow-hidden
                    rounded-2xl
                    bg-slate-900
                    px-6 py-8
                    md:px-8">

                <div
                    class="relative z-10
                        flex flex-col
                        md:flex-row
                        md:items-center
                        md:justify-between
                        gap-6">

                    <div class="max-w-2xl">

                        <div class="flex items-center gap-2 mb-3">

                            <i data-lucide="headphones" class="w-5 h-5 text-red-400">
                            </i>

                            <span
                                class="text-sm
                                     font-semibold
                                     text-red-400">

                                Support technique

                            </span>

            50% {
                transform: scale(1.5);
                opacity: 0.55;
            }

        }
    </style>

@endsection
```
