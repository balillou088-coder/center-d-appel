@extends('layouts.app')

@section('title', 'Arti Web Docs')

@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-white">

        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="max-w-3xl">

                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2
                           px-3 py-1.5
                           rounded-full
                           bg-blue-50
                           border border-blue-100
                           text-blue-600
                           text-sm font-medium">

                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>

                    Arti Web

                </div>


                {{-- Title --}}
                <h1
                    class="mt-6 text-4xl sm:text-5xl lg:text-6xl
                           font-bold tracking-tight text-slate-900">

                    Prenez en main Arti Web,

                    <span class="block text-red-600">
                        appel après appel.
                    </span>

                </h1>


                {{-- Description --}}
                <p
                    class="mt-6 max-w-2xl
                          text-lg leading-8
                          text-slate-500">

                    Une solution moderne pour simplifier la gestion
                    des appels, des clients et des activités de votre
                    centre d'appels.

                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
        PRÉSENTATION ARTI WEB
    ========================================================== --}}
    <section id="presentation" class="bg-slate-50 border-y border-slate-200">

        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Texte --}}
                <div>

                    <span class="text-sm font-semibold text-blue-600">
                        À PROPOS D'ARTI WEB
                    </span>

                    <h2
                        class="mt-3 text-3xl sm:text-4xl
                               font-bold tracking-tight
                               text-slate-900">

                        Une solution pensée pour
                        <span class="text-red-600">
                            les centres d'appels.
                        </span>

                    </h2>

                    <p class="mt-5 text-base leading-7 text-slate-500">

                        Arti Web est une plateforme web conçue pour faciliter
                        l'organisation et la gestion quotidienne d'un centre
                        d'appels.

                    </p>

                    <p class="mt-4 text-base leading-7 text-slate-500">

                        Elle permet de centraliser les informations, de suivre
                        les activités des agents et de simplifier la gestion
                        des appels et des clients dans un environnement moderne
                        et intuitif.

                    </p>


                    {{-- Point important --}}
                    <div class="mt-7 flex items-center gap-3">

                        <div
                            class="flex items-center justify-center
                                   w-10 h-10
                                   rounded-lg
                                   bg-blue-50
                                   text-blue-600">

                            <i data-lucide="check" class="w-5 h-5"></i>

                        </div>

                        <span class="text-sm font-medium text-slate-700">

                            Une gestion centralisée et simplifiée

                        </span>

                    </div>

                </div>


                {{-- Bloc fonctionnalités --}}
                <div>

                    <div
                        class="rounded-2xl
                               bg-white
                               border border-slate-200
                               shadow-sm
                               p-6 sm:p-8">

                        {{-- Header --}}
                        <div class="flex items-center gap-4">

                            <div
                                class="flex items-center justify-center
                                       w-12 h-12
                                       rounded-xl
                                       bg-blue-50
                                       text-blue-600">

                                <i data-lucide="phone-call" class="w-6 h-6">
                                </i>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Arti Web
                                </h3>

                                <p class="text-sm text-slate-500">
                                    Gestion de centre d'appel
                                </p>

                            </div>

                        </div>


                        {{-- Features --}}
                        <div class="mt-8 grid grid-cols-2 gap-4">

                            {{-- Appels --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border border-transparent
                                       hover:border-blue-100
                                       transition">

                                <i data-lucide="phone" class="w-5 h-5 text-blue-600">
                                </i>

                                <p class="mt-3 text-sm font-semibold text-slate-900">
                                    Appels
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Gestion simplifiée
                                </p>

                            </div>


                            {{-- Équipes --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border border-transparent
                                       hover:border-red-100
                                       transition">

                                <i data-lucide="users" class="w-5 h-5 text-red-600">
                                </i>

                                <p class="mt-3 text-sm font-semibold text-slate-900">
                                    Équipes
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Organisation efficace
                                </p>

                            </div>


                            {{-- Clients --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border border-transparent
                                       hover:border-blue-100
                                       transition">

                                <i data-lucide="user-round" class="w-5 h-5 text-blue-600">
                                </i>

                                <p class="mt-3 text-sm font-semibold text-slate-900">
                                    Clients
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Informations centralisées
                                </p>

                            </div>


                            {{-- Activité --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border border-transparent
                                       hover:border-red-100
                                       transition">

                                <i data-lucide="bar-chart-3" class="w-5 h-5 text-red-600">
                                </i>

                                <p class="mt-3 text-sm font-semibold text-slate-900">
                                    Activité
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Suivi quotidien
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CALL CENTER IMAGE / ANIMATION
    ========================================================== --}}
    <section class="relative overflow-hidden bg-white">

        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

            {{-- Section header --}}
            <div class="max-w-2xl mb-10">

                <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider">
                    L'environnement Arti Web
                </span>

                <h2
                    class="mt-3 text-3xl sm:text-4xl
                           font-bold tracking-tight
                           text-slate-900">

                    Au cœur de votre
                    <span class="text-red-600">
                        centre d'appel.
                    </span>

                </h2>

                <p class="mt-4 text-base sm:text-lg leading-7 text-slate-500">

                    Une expérience moderne pour accompagner vos équipes
                    et simplifier la gestion quotidienne des appels.

                </p>

            </div>


            {{-- Image Card --}}
            <div
                class="relative
                       group
                       overflow-hidden
                       rounded-3xl
                       border border-slate-200
                       bg-slate-900
                       shadow-2xl">

                {{-- Image --}}
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1800&q=85"
                    alt="Centre d'appel Arti Web"
                    class="w-full
                           h-[360px]
                           sm:h-[450px]
                           lg:h-[560px]
                           object-cover
                           object-center
                           call-center-image">


                {{-- Overlay --}}
                <div
                    class="absolute inset-0
                           bg-gradient-to-r
                           from-slate-950/85
                           via-slate-900/45
                           to-transparent">
                </div>


                {{-- Content --}}
                <div class="absolute inset-0
                           flex items-center">

                    <div class="max-w-xl px-7 sm:px-10 lg:px-14">

                        {{-- Badge --}}
                        <div
                            class="inline-flex items-center gap-2
                                   px-4 py-2
                                   rounded-full
                                   bg-white/10
                                   border border-white/20
                                   backdrop-blur-md
                                   text-white
                                   text-sm font-medium">

                            <span
                                class="w-2.5 h-2.5
                                       rounded-full
                                       bg-blue-400
                                       shadow-[0_0_12px_rgba(96,165,250,0.9)]
                                       animate-pulse">
                            </span>

                            Centre d'appel Arti Web

                        </div>


                        {{-- Title --}}
                        <h3
                            class="mt-6
                                   text-3xl
                                   sm:text-4xl
                                   lg:text-5xl
                                   font-bold
                                   leading-tight
                                   tracking-tight
                                   text-white">

                            Une gestion plus simple,
                            <span class="block text-red-400">
                                plus rapide et plus moderne.
                            </span>

                        </h3>


                        {{-- Description --}}
                        <p
                            class="mt-5
                                  max-w-lg
                                  text-base
                                  sm:text-lg
                                  leading-7
                                  text-slate-200">

                            Arti Web permet aux équipes de travailler dans
                            un environnement organisé, connecté et pensé
                            pour les besoins d'un centre d'appel.

                        </p>


                        {{-- Informations --}}
                        <div class="mt-7 flex flex-wrap gap-3">

                            {{-- Item 1 --}}
                            <div
                                class="inline-flex items-center gap-2
                                       px-4 py-2.5
                                       rounded-xl
                                       bg-white/10
                                       border border-white/15
                                       backdrop-blur-md
                                       text-white
                                       text-sm">

                                <i data-lucide="headphones" class="w-4 h-4 text-blue-300">
                                </i>

                                Équipe professionnelle

                            </div>


                            {{-- Item 2 --}}
                            <div
                                class="inline-flex items-center gap-2
                                       px-4 py-2.5
                                       rounded-xl
                                       bg-white/10
                                       border border-white/15
                                       backdrop-blur-md
                                       text-white
                                       text-sm">

                                <i data-lucide="phone-call" class="w-4 h-4 text-red-300">
                                </i>

                                Gestion des appels

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Floating icon --}}
                <div
                    class="absolute
                           top-6
                           right-6
                           hidden sm:flex
                           items-center
                           justify-center
                           w-14 h-14
                           rounded-2xl
                           bg-white/10
                           border border-white/20
                           backdrop-blur-md
                           text-white
                           floating-icon">

                    <i data-lucide="phone-call" class="w-6 h-6">
                    </i>

                </div>


                {{-- Bottom status --}}
                <div
                    class="absolute
                           bottom-6
                           right-6
                           hidden md:flex
                           items-center gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/10
                           border border-white/20
                           backdrop-blur-md">

                    <span
                        class="w-2.5 h-2.5
                               rounded-full
                               bg-green-400
                               shadow-[0_0_10px_rgba(74,222,128,0.9)]">
                    </span>

                    <span class="text-sm font-medium text-white">
                        Solution active
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        SUPPORT
    ========================================================== --}}
    <section id="support" class="bg-red-600">

        <div class="max-w-7xl mx-auto px-6 py-16">

            <div
                class="flex flex-col md:flex-row
                       md:items-center
                       md:justify-between
                       gap-8">

                <div>

                    <h2 class="text-3xl font-bold text-white">

                        Une question sans réponse ?

                    </h2>

                    <p class="mt-3 max-w-xl text-red-100">

                        Contactez l'équipe technique d'Arti Web,
                        on vous répond rapidement.

                    </p>

                </div>


                <a href="mailto:support@example.com"
                    class="inline-flex items-center justify-center
                          gap-2
                          px-6 py-3
                          rounded-xl
                          bg-white
                          text-red-600
                          font-semibold
                          hover:bg-blue-50
                          hover:text-blue-600
                          transition">

                    <i data-lucide="mail" class="w-5 h-5"></i>

                    Contacter le support

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
        ANIMATIONS
    ========================================================== --}}
    <style>
        /* Animation lente de l'image */
        @keyframes callCenterZoom {

            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.045);
            }

            100% {
                transform: scale(1);
            }

        }


        /* Animation de l'icône */
        @keyframes floatingIcon {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }

        }


        .call-center-image {

            animation: callCenterZoom 10s ease-in-out infinite;

            transition:
                transform 1.5s ease,
                filter 0.8s ease;

        }


        .group:hover .call-center-image {

            transform: scale(1.08);

            filter: brightness(1.08);

        }


        .floating-icon {

            animation: floatingIcon 3s ease-in-out infinite;

        }


        /* Respect des préférences utilisateur */
        @media (prefers-reduced-motion: reduce) {

            .call-center-image,
            .floating-icon {

                animation: none;

            }

        }
    </style>

@endsection
