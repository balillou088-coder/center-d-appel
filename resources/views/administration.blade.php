@extends('layouts.app')

@section('title', 'Administration | Arti Web Documentation')

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

                    <i data-lucide="settings" class="w-3.5 h-3.5"></i>

                    Administration

                </span>

            </div>


            <div
                class="flex flex-col lg:flex-row
                    lg:items-end
                    lg:justify-between
                    gap-6">

                <div class="max-w-3xl">

                    <h1
                        class="mt-5 text-3xl sm:text-4xl lg:text-5xl
                               font-bold tracking-tight text-slate-900">

                        <span class="text-blue-700">
                            Administration
                        </span>

                        <span class="text-red-600">
                            de la plateforme
                        </span>

                    </h1>

                    <p
                        class="mt-4 text-[15px]
                          leading-7
                          tracking-[-0.005em]
                          text-slate-500">

                        Gérez les utilisateurs, les accès, les paramètres
                        et les principales fonctionnalités de la plateforme
                        <span class="font-semibold text-blue-700">
                            Arti Web
                        </span>.

                    </p>

                </div>


                {{-- Administration disponible --}}
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

                        {{-- Pulse --}}
                        <span
                            class="absolute inset-0
                                   rounded-full
                                   bg-green-400
                                   opacity-40
                                   animate-ping">
                        </span>

                        {{-- Point principal --}}
                        <span
                            class="relative
                                   w-2.5 h-2.5
                                   rounded-full
                                   bg-green-500
                                   shadow-[0_0_10px_rgba(34,197,94,0.7)]">
                        </span>

                    </span>


                    <span class="relative z-10">
                        Administration disponible
                    </span>

                </div>

            </div>

        </div>


        {{-- =========================
        ADMINISTRATION GRID
    ========================== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">


            {{-- UTILISATEURS --}}
            <a href="#utilisateurs" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">

                            <i data-lucide="users" class="w-5 h-5 text-red-600">
                            </i>

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

                            Gestion des utilisateurs

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Gérez les comptes utilisateurs,
                            consultez leurs informations et
                            contrôlez leur accès.

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

                            Gérer les utilisateurs

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


            {{-- ROLES --}}
            <a href="#roles" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">

                            <i data-lucide="shield-check" class="w-5 h-5 text-blue-600">
                            </i>

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

                            Rôles & permissions

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Gérez les rôles et définissez les
                            permissions accordées à chaque
                            utilisateur.

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

                            Gérer les permissions

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


            {{-- CONFIGURATION --}}
            <a href="#configuration" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">

                            <i data-lucide="sliders-horizontal" class="w-5 h-5 text-red-600">
                            </i>

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

                            Configuration

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Configurez les paramètres généraux
                            et adaptez la plateforme aux besoins
                            de votre organisation.

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

                            Paramètres généraux

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


            {{-- DONNEES --}}
            <a href="#donnees" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">

                            <i data-lucide="database" class="w-5 h-5 text-blue-600">
                            </i>

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

                            Gestion des données

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Consultez et organisez les principales
                            données utilisées par la plateforme.

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

                            Gérer les données

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


            {{-- SECURITE --}}
            <a href="#securite" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-red-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">

                            <i data-lucide="lock-keyhole" class="w-5 h-5 text-red-600">
                            </i>

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

                            Sécurité

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Protégez les comptes et contrôlez
                            les accès aux fonctionnalités
                            sensibles de la plateforme.

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

                            Sécurité des accès

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


            {{-- ACTIVITE --}}
            <a href="#activite" class="group">

                <div
                    class="h-full bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg hover:border-blue-200">

                    <div class="flex items-start justify-between">

                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">

                            <i data-lucide="activity" class="w-5 h-5 text-blue-600">
                            </i>

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

                            Suivi de l'activité

                        </h2>

                        <p
                            class="mt-2
                                  text-[13px]
                                  font-normal
                                  leading-6
                                  tracking-[-0.002em]
                                  text-slate-500">

                            Consultez les opérations importantes
                            et suivez l'activité générale
                            de la plateforme.

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

                            Voir l'activité

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

    </div>


    {{-- =========================
        ANIMATIONS
    ========================== --}}
    <style>
        @keyframes ping {

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }

        }

        @keyframes statusGlow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.25;
            }

            50% {
                transform: scale(1.5);
                opacity: 0.55;
            }

        }
    </style>

@endsection
