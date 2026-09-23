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
        PHOTO ARTI WEB ENTRE HERO ET PRÉSENTATION
    ========================================================== --}}
    <section class="relative bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 pb-16 lg:pb-20">

            <div
                class="arti-photo-wrapper
                       relative
                       h-[360px]
                       sm:h-[460px]
                       lg:h-[560px]
                       overflow-hidden
                       rounded-3xl
                       bg-slate-950
                       shadow-2xl
                       border border-slate-200">


                {{-- =================================================
                    IMAGE PRINCIPALE
                ================================================== --}}
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=2000&q=95"
                    alt="Équipe Arti Web dans un centre d'appel" class="arti-main-photo">


                {{-- =================================================
                    DARK OVERLAY
                ================================================== --}}
                <div
                    class="absolute inset-0
                           bg-gradient-to-r
                           from-slate-950/55
                           via-slate-950/10
                           to-slate-950/30
                           pointer-events-none">
                </div>


                {{-- =================================================
                    FUMÉE / BRUME GAUCHE
                ================================================== --}}
                <div class="smoke smoke-one
                           pointer-events-none">
                </div>


                {{-- =================================================
                    FUMÉE / BRUME DROITE
                ================================================== --}}
                <div class="smoke smoke-two
                           pointer-events-none">
                </div>


                {{-- =================================================
                    LUMIÈRE / GLOW
                ================================================== --}}
                <div class="arti-photo-glow
                           pointer-events-none">
                </div>


                {{-- =================================================
                    BADGE
                ================================================== --}}
                <div
                    class="absolute
                           top-6
                           left-6
                           sm:top-8
                           sm:left-8
                           z-20
                           inline-flex
                           items-center
                           gap-2
                           px-4
                           py-2
                           rounded-full
                           bg-white/15
                           backdrop-blur-md
                           border border-white/25
                           text-white
                           text-sm
                           font-medium">

                    <span
                        class="w-2.5 h-2.5
                               rounded-full
                               bg-blue-400
                               shadow-[0_0_15px_rgba(96,165,250,0.9)]
                               animate-pulse">
                    </span>

                    Arti Web

                </div>


                {{-- =================================================
                    CONTENU SUR LA PHOTO
                ================================================== --}}
                <div
                    class="absolute
                           inset-0
                           z-20
                           flex
                           items-end">

                    <div
                        class="w-full
                               p-6
                               sm:p-8
                               lg:p-12">

                        <div class="max-w-2xl">

                            <span
                                class="text-xs
                                       sm:text-sm
                                       uppercase
                                       tracking-[0.2em]
                                       font-semibold
                                       text-blue-300">

                                Centre d'appel moderne

                            </span>


                            <h2
                                class="mt-3
                                       text-3xl
                                       sm:text-4xl
                                       lg:text-5xl
                                       font-bold
                                       leading-tight
                                       text-white
                                       drop-shadow-2xl">

                                Une équipe connectée,

                                <span class="block text-red-400">

                                    une gestion simplifiée.

                                </span>

                            </h2>


                            <p
                                class="mt-4
                                      max-w-xl
                                      text-sm
                                      sm:text-base
                                      lg:text-lg
                                      leading-7
                                      text-slate-200">

                                Arti Web accompagne les équipes dans
                                la gestion quotidienne des appels,
                                des clients et des activités.

                            </p>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    FLOATING ICON
                ================================================== --}}
                <div
                    class="absolute
                           top-7
                           right-7
                           z-30
                           hidden sm:flex
                           items-center
                           justify-center
                           w-14
                           h-14
                           rounded-2xl
                           bg-white/10
                           backdrop-blur-md
                           border border-white/20
                           text-white
                           photo-floating-icon">

                    <i data-lucide="phone-call" class="w-6 h-6">
                    </i>

                </div>


                {{-- =================================================
                    STATUS
                ================================================== --}}
                <div
                    class="absolute
                           bottom-7
                           right-7
                           z-30
                           hidden md:flex
                           items-center
                           gap-3
                           px-4
                           py-3
                           rounded-2xl
                           bg-black/20
                           backdrop-blur-md
                           border border-white/15
                           text-white">

                    <span
                        class="w-2.5
                               h-2.5
                               rounded-full
                               bg-green-400
                               shadow-[0_0_12px_rgba(74,222,128,0.9)]">
                    </span>

                    <span class="text-sm
                               font-medium">

                        Solution active

                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        PRÉSENTATION ARTI WEB
    ========================================================== --}}
    <section id="presentation" class="bg-slate-50 border-y border-slate-200">

        <div
            class="max-w-7xl
                   mx-auto
                   px-6
                   py-16
                   lg:py-20">

            <div
                class="grid
                       lg:grid-cols-2
                       gap-12
                       items-center">


                {{-- =================================================
                    TEXTE
                ================================================== --}}
                <div>

                    <span
                        class="text-sm
                               font-semibold
                               text-blue-600">

                        À PROPOS D'ARTI WEB

                    </span>


                    <h2
                        class="mt-3
                               text-3xl
                               sm:text-4xl
                               font-bold
                               tracking-tight
                               text-slate-900">

                        Une solution pensée pour

                        <span class="text-red-600">

                            les centres d'appels.

                        </span>

                    </h2>


                    <p
                        class="mt-5
                              text-base
                              leading-7
                              text-slate-500">

                        Arti Web est une plateforme web conçue pour faciliter
                        l'organisation et la gestion quotidienne d'un centre
                        d'appels.

                    </p>


                    <p
                        class="mt-4
                              text-base
                              leading-7
                              text-slate-500">

                        Elle permet de centraliser les informations, de suivre
                        les activités des agents et de simplifier la gestion
                        des appels et des clients dans un environnement moderne
                        et intuitif.

                    </p>


                    {{-- Point important --}}
                    <div
                        class="mt-7
                               flex
                               items-center
                               gap-3">

                        <div
                            class="flex
                                   items-center
                                   justify-center
                                   w-10
                                   h-10
                                   rounded-lg
                                   bg-blue-50
                                   text-blue-600">

                            <i data-lucide="check" class="w-5 h-5">
                            </i>

                        </div>


                        <span
                            class="text-sm
                                   font-medium
                                   text-slate-700">

                            Une gestion centralisée et simplifiée

                        </span>

                    </div>

                </div>


                {{-- =================================================
                    BLOC FONCTIONNALITÉS
                ================================================== --}}
                <div>

                    <div
                        class="rounded-2xl
                               bg-white
                               border border-slate-200
                               shadow-sm
                               p-6
                               sm:p-8">


                        {{-- Header --}}
                        <div
                            class="flex
                                   items-center
                                   gap-4">

                            <div
                                class="flex
                                       items-center
                                       justify-center
                                       w-12
                                       h-12
                                       rounded-xl
                                       bg-blue-50
                                       text-blue-600">

                                <i data-lucide="phone-call" class="w-6 h-6">
                                </i>

                            </div>


                            <div>

                                <h3 class="font-bold
                                           text-slate-900">

                                    Arti Web

                                </h3>


                                <p class="text-sm
                                          text-slate-500">

                                    Gestion de centre d'appel

                                </p>

                            </div>

                        </div>


                        {{-- Features --}}
                        <div
                            class="mt-8
                                   grid
                                   grid-cols-2
                                   gap-4">


                            {{-- Appels --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border
                                       border-transparent
                                       hover:border-blue-100
                                       transition">

                                <i data-lucide="phone" class="w-5 h-5 text-blue-600">
                                </i>


                                <p
                                    class="mt-3
                                          text-sm
                                          font-semibold
                                          text-slate-900">

                                    Appels

                                </p>


                                <p
                                    class="mt-1
                                          text-xs
                                          text-slate-500">

                                    Gestion simplifiée

                                </p>

                            </div>


                            {{-- Équipes --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border
                                       border-transparent
                                       hover:border-red-100
                                       transition">

                                <i data-lucide="users" class="w-5 h-5 text-red-600">
                                </i>


                                <p
                                    class="mt-3
                                          text-sm
                                          font-semibold
                                          text-slate-900">

                                    Équipes

                                </p>


                                <p
                                    class="mt-1
                                          text-xs
                                          text-slate-500">

                                    Organisation efficace

                                </p>

                            </div>


                            {{-- Clients --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border
                                       border-transparent
                                       hover:border-blue-100
                                       transition">

                                <i data-lucide="user-round" class="w-5 h-5 text-blue-600">
                                </i>


                                <p
                                    class="mt-3
                                          text-sm
                                          font-semibold
                                          text-slate-900">

                                    Clients

                                </p>


                                <p
                                    class="mt-1
                                          text-xs
                                          text-slate-500">

                                    Informations centralisées

                                </p>

                            </div>


                            {{-- Activité --}}
                            <div
                                class="rounded-xl
                                       bg-slate-50
                                       p-5
                                       border
                                       border-transparent
                                       hover:border-red-100
                                       transition">

                                <i data-lucide="bar-chart-3" class="w-5 h-5 text-red-600">
                                </i>


                                <p
                                    class="mt-3
                                          text-sm
                                          font-semibold
                                          text-slate-900">

                                    Activité

                                </p>


                                <p
                                    class="mt-1
                                          text-xs
                                          text-slate-500">

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
    <section class="relative
               overflow-hidden
               bg-white">

        <div
            class="max-w-7xl
                   mx-auto
                   px-6
                   py-16
                   lg:py-24">


            {{-- Section header --}}
            <div class="max-w-2xl
                       mb-10">

                <span
                    class="text-sm
                           font-semibold
                           text-blue-600
                           uppercase
                           tracking-wider">

                    L'environnement Arti Web

                </span>


                <h2
                    class="mt-3
                           text-3xl
                           sm:text-4xl
                           font-bold
                           tracking-tight
                           text-slate-900">

                    Au cœur de votre

                    <span class="text-red-600">

                        centre d'appel.

                    </span>

                </h2>


                <p
                    class="mt-4
                          text-base
                          sm:text-lg
                          leading-7
                          text-slate-500">

                    Une expérience moderne pour accompagner vos équipes
                    et simplifier la gestion quotidienne des appels.

                </p>

            </div>


            {{-- Image Card --}}
            <div
                class="relative
                       group
                       h-[360px]
                       sm:h-[450px]
                       lg:h-[560px]
                       overflow-hidden
                       rounded-3xl
                       border border-slate-200
                       bg-slate-900
                       shadow-2xl">


                {{-- Image --}}
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1800&q=85"
                    alt="Équipe Arti Web au travail" class="call-center-image">


                {{-- Overlay --}}
                <div
                    class="absolute
                           inset-0
                           bg-gradient-to-r
                           from-slate-950/85
                           via-slate-900/45
                           to-transparent">
                </div>


                {{-- Content --}}
                <div
                    class="absolute
                           inset-0
                           flex
                           items-center">

                    <div
                        class="max-w-xl
                               px-7
                               sm:px-10
                               lg:px-14">


                        {{-- Badge --}}
                        <div
                            class="inline-flex
                                   items-center
                                   gap-2
                                   px-4
                                   py-2
                                   rounded-full
                                   bg-white/10
                                   border border-white/20
                                   backdrop-blur-md
                                   text-white
                                   text-sm
                                   font-medium">

                            <span
                                class="w-2.5
                                       h-2.5
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
                        <div
                            class="mt-7
                                   flex
                                   flex-wrap
                                   gap-3">


                            {{-- Item 1 --}}
                            <div
                                class="inline-flex
                                       items-center
                                       gap-2
                                       px-4
                                       py-2.5
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
                                class="inline-flex
                                       items-center
                                       gap-2
                                       px-4
                                       py-2.5
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
                           w-14
                           h-14
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
                           items-center
                           gap-3
                           px-4
                           py-3
                           rounded-2xl
                           bg-white/10
                           border border-white/20
                           backdrop-blur-md">

                    <span
                        class="w-2.5
                               h-2.5
                               rounded-full
                               bg-green-400
                               shadow-[0_0_10px_rgba(74,222,128,0.9)]">
                    </span>

                    <span
                        class="text-sm
                               font-medium
                               text-white">

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

        <div class="max-w-7xl
                   mx-auto
                   px-6
                   py-16">

            <div
                class="flex
                       flex-col
                       md:flex-row
                       md:items-center
                       md:justify-between
                       gap-8">


                <div>

                    <h2
                        class="text-3xl
                               font-bold
                               text-white">

                        Une question sans réponse ?

                    </h2>


                    <p class="mt-3
                              max-w-xl
                              text-red-100">

                        Contactez l'équipe technique d'Arti Web,
                        on vous répond rapidement.

                    </p>

                </div>


                <a href="mailto:support@example.com"
                    class="inline-flex
                           items-center
                           justify-center
                           gap-2
                           px-6
                           py-3
                           rounded-xl
                           bg-white
                           text-red-600
                           font-semibold
                           hover:bg-blue-50
                           hover:text-blue-600
                           transition">

                    <i data-lucide="mail" class="w-5 h-5">
                    </i>

                    Contacter le support

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
        ANIMATIONS
    ========================================================== --}}
    <style>
        /* =========================================================
                   PHOTO PRINCIPALE : ZOOM + PAN
                ========================================================== */

        @keyframes artiWebPhotoMove {

            0% {

                transform:
                    scale(1.08) translate3d(0, 0, 0);

            }

            20% {

                transform:
                    scale(1.11) translate3d(-15px, -5px, 0);

            }

            40% {

                transform:
                    scale(1.14) translate3d(-35px, -8px, 0);

            }

            60% {

                transform:
                    scale(1.17) translate3d(-55px, -4px, 0);

            }

            80% {

                transform:
                    scale(1.13) translate3d(-25px, 4px, 0);

            }

            100% {

                transform:
                    scale(1.08) translate3d(0, 0, 0);

            }

        }


        /* =========================================================
                   FUMÉE 1
                ========================================================== */

        @keyframes smokeMoveOne {

            0% {

                transform:
                    translate3d(-80px, 30px, 0) scale(1);

                opacity: 0;

            }

            25% {

                opacity: 0.18;

            }

            50% {

                transform:
                    translate3d(80px, -20px, 0) scale(1.25);

                opacity: 0.28;

            }

            75% {

                opacity: 0.15;

            }

            100% {

                transform:
                    translate3d(160px, -50px, 0) scale(1.4);

                opacity: 0;

            }

        }


        /* =========================================================
                   FUMÉE 2
                ========================================================== */

        @keyframes smokeMoveTwo {

            0% {

                transform:
                    translate3d(100px, 50px, 0) scale(1.1);

                opacity: 0;

            }

            30% {

                opacity: 0.15;

            }

            60% {

                transform:
                    translate3d(-50px, -30px, 0) scale(1.35);

                opacity: 0.25;

            }

            100% {

                transform:
                    translate3d(-160px, -70px, 0) scale(1.5);

                opacity: 0;

            }

        }


        /* =========================================================
                   GLOW
                ========================================================== */

        @keyframes photoGlow {

            0%,
            100% {

                opacity: 0.10;
                transform: scale(1);

            }

            50% {

                opacity: 0.24;
                transform: scale(1.08);

            }

        }


        /* =========================================================
                   FLOATING ICON
                ========================================================== */

        @keyframes floatingIcon {

            0%,
            100% {

                transform: translateY(0);

            }

            50% {

                transform: translateY(-10px);

            }

        }


        /* =========================================================
                   IMAGE
                ========================================================== */

        .arti-main-photo {

            position: absolute;

            top: -8%;
            left: -8%;

            width: 116%;
            height: 116%;

            max-width: none;

            object-fit: cover;

            object-position: center;

            transform-origin: center center;

            animation:
                artiWebPhotoMove 14s ease-in-out infinite;

            will-change: transform;

        }


        /* =========================================================
                   FUMÉE
                ========================================================== */

        .smoke {

            position: absolute;

            width: 280px;
            height: 280px;

            border-radius: 9999px;

            background:
                radial-gradient(circle,
                    rgba(255, 255, 255, 0.22) 0%,
                    rgba(255, 255, 255, 0.10) 35%,
                    rgba(255, 255, 255, 0) 72%);

            filter: blur(35px);

            z-index: 5;

            pointer-events: none;

        }


        .smoke-one {

            left: -100px;
            bottom: -80px;

            animation:
                smokeMoveOne 12s ease-in-out infinite;

        }


        .smoke-two {

            right: -100px;
            top: -80px;

            animation:
                smokeMoveTwo 15s ease-in-out infinite;

        }


        /* =========================================================
                   GLOW
                ========================================================== */

        .arti-photo-glow {

            position: absolute;

            inset: -20%;

            background:
                radial-gradient(circle at 30% 50%,
                    rgba(59, 130, 246, 0.25),
                    transparent 35%),
                radial-gradient(circle at 75% 45%,
                    rgba(239, 68, 68, 0.18),
                    transparent 35%);

            filter: blur(45px);

            z-index: 4;

            animation:
                photoGlow 7s ease-in-out infinite;

            pointer-events: none;

        }


        /* =========================================================
                   FLOATING ICON
                ========================================================== */

        .photo-floating-icon {

            animation:
                floatingIcon 3s ease-in-out infinite;

            will-change: transform;

        }


        /* =========================================================
                   PHOTO 2 : PAN + ZOOM (call center image)
                ========================================================== */

        @keyframes callCenterMove {

            0% {

                transform:
                    scale(1.06) translate3d(0, 0, 0);

            }

            25% {

                transform:
                    scale(1.10) translate3d(20px, -6px, 0);

            }

            50% {

                transform:
                    scale(1.13) translate3d(40px, 6px, 0);

            }

            75% {

                transform:
                    scale(1.10) translate3d(15px, 10px, 0);

            }

            100% {

                transform:
                    scale(1.06) translate3d(0, 0, 0);

            }

        }


        .call-center-image {

            position: absolute;

            top: -6%;
            left: -6%;

            width: 112%;
            height: 112%;

            max-width: none;

            object-fit: cover;
            object-position: center;

            transform-origin: center center;

            animation:
                callCenterMove 16s ease-in-out infinite;

            will-change: transform;

            transition:
                filter 0.8s ease;

        }


        .group:hover .call-center-image {

            filter: brightness(1.08);

        }


        /* =========================================================
                   MOBILE
                ========================================================== */

        @media (max-width: 768px) {

            .arti-main-photo {

                animation-duration: 16s;

            }

            .smoke {

                width: 200px;
                height: 200px;

                filter: blur(30px);

            }

            .call-center-image {

                animation-duration: 18s;

            }

        }


        /* =========================================================
                   ACCESSIBILITY
                ========================================================== */

        @media (prefers-reduced-motion: reduce) {

            .arti-main-photo,
            .smoke-one,
            .smoke-two,
            .arti-photo-glow,
            .photo-floating-icon,
            .call-center-image {

                animation: none !important;

            }

        }
    </style>

@endsection
