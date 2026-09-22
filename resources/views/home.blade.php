@extends('layouts.app')

@section('title', 'Arti Web Docs')

@section('content')

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-white">

        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2
                            px-3 py-1.5
                            rounded-full
                            bg-indigo-50
                            border border-indigo-100
                            text-indigo-600
                            text-sm font-medium">

                    <span class="w-2 h-2 rounded-full bg-indigo-600"></span>

                    Documentation Arti Web
                </div>


                <h1
                    class="mt-6 text-4xl sm:text-5xl lg:text-6xl
                           font-bold tracking-tight text-slate-900">

                    Prenez en main Arti Web,

                    <span class="block text-indigo-600">
                        appel après appel.
                    </span>

                </h1>


                <p
                    class="mt-6 max-w-2xl
                          text-lg leading-8
                          text-slate-500">

                    Les guides pour les agents et les administrateurs
                    du centre d'appels : de la connexion au suivi
                    des rapports.

                </p>


                {{-- Search --}}
                <div class="mt-8 max-w-2xl">

                    <div class="relative">

                        <i data-lucide="search"
                            class="absolute left-4 top-1/2
                                  -translate-y-1/2
                                  w-5 h-5 text-slate-400">
                        </i>

                        <input type="text" placeholder="Rechercher, par exemple « transférer un appel »"
                            class="w-full h-14
                                   pl-12 pr-5
                                   rounded-xl
                                   border border-slate-200
                                   bg-white
                                   shadow-sm
                                   text-sm
                                   outline-none
                                   transition

                                   focus:border-indigo-400
                                   focus:ring-4
                                   focus:ring-indigo-100">

                    </div>

                </div>


                {{-- Quick links --}}
                <div class="mt-5 flex flex-wrap gap-3">

                    <a href="#guides"
                        class="inline-flex items-center gap-2
                              px-4 py-2
                              rounded-lg
                              bg-slate-100
                              text-sm font-medium
                              text-slate-600
                              hover:bg-indigo-50
                              hover:text-indigo-600
                              transition">

                        <i data-lucide="book-open" class="w-4 h-4"></i>

                        Voir les guides
                    </a>


                    <a href="#faq"
                        class="inline-flex items-center gap-2
                              px-4 py-2
                              rounded-lg
                              bg-slate-100
                              text-sm font-medium
                              text-slate-600
                              hover:bg-indigo-50
                              hover:text-indigo-600
                              transition">

                        <i data-lucide="circle-help" class="w-4 h-4"></i>

                        Questions fréquentes
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- Guides --}}
    <section id="guides" class="bg-slate-50
                    border-y border-slate-200">

        <div class="max-w-7xl mx-auto px-6 py-20">

            {{-- Section header --}}
            <div
                class="flex flex-col md:flex-row
                        md:items-end
                        md:justify-between
                        gap-5 mb-10">

                <div>

                    <p
                        class="text-sm font-semibold
                              text-indigo-600 uppercase
                              tracking-wider">
                        Documentation
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-slate-900">
                        Tout ce dont vous avez besoin
                    </h2>

                    <p class="mt-3 text-slate-500">
                        Retrouvez rapidement les informations
                        dont vous avez besoin.
                    </p>

                </div>


                <a href="#guides"
                    class="inline-flex items-center gap-2
                          text-sm font-semibold
                          text-indigo-600
                          hover:text-indigo-700">

                    Tous les guides

                    <i data-lucide="arrow-right" class="w-4 h-4">
                    </i>

                </a>

            </div>


            {{-- Cards --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">


                {{-- Card 1 --}}
                <a href="#connexion"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="log-in" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        Connexion et comptes
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Se connecter et comprendre les différents
                        rôles disponibles dans Arti Web.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>


                {{-- Card 2 --}}
                <a href="#appels"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="phone" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        Gestion des appels
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Répondre, transférer, mettre en attente,
                        prendre des notes et retrouver l'historique.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>


                {{-- Card 3 --}}
                <a href="#clients"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="users" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        Clients et contacts
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Créer une fiche, chercher un client et consulter
                        ses échanges précédents.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>


                {{-- Card 4 --}}
                <a href="#rapports"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="bar-chart-3" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        Rapports et statistiques
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Suivre le volume d'appels, la durée moyenne
                        et la performance de chaque équipe.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>


                {{-- Card 5 --}}
                <a href="#administration"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="settings" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        Administration
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Gérer les utilisateurs, les équipes,
                        les files d'attente et les permissions.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>


                {{-- Card 6 --}}
                <a href="#faq"
                    class="group bg-white
                          rounded-2xl
                          border border-slate-200
                          p-6
                          hover:border-indigo-200
                          hover:shadow-lg
                          hover:shadow-indigo-100/50
                          transition">

                    <div
                        class="w-11 h-11
                                rounded-xl
                                bg-indigo-50
                                flex items-center justify-center
                                text-indigo-600">

                        <i data-lucide="circle-help" class="w-5 h-5">
                        </i>

                    </div>

                    <h3 class="mt-5 font-semibold text-lg">
                        FAQ et dépannage
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Retrouvez les réponses aux erreurs
                        et problèmes les plus courants.
                    </p>

                    <div
                        class="mt-5 flex items-center
                                text-sm font-semibold
                                text-indigo-600">

                        Consulter le guide

                        <i data-lucide="arrow-right"
                            class="ml-2 w-4 h-4
                                  group-hover:translate-x-1
                                  transition">
                        </i>

                    </div>

                </a>

            </div>

        </div>

    </section>


    {{-- FAQ --}}
    <section id="faq" class="bg-white">

        <div class="max-w-5xl mx-auto px-6 py-20">

            <div class="text-center mb-10">

                <p
                    class="text-sm font-semibold
                          text-indigo-600 uppercase
                          tracking-wider">
                    FAQ
                </p>

                <h2 class="mt-2 text-3xl font-bold">
                    Questions fréquentes
                </h2>

                <p class="mt-3 text-slate-500">
                    Les réponses aux questions les plus courantes.
                </p>

            </div>


            <div class="space-y-3">

                @foreach (['Comment récupérer un mot de passe oublié ?', 'Comment transférer un appel à un collègue ?', "Pourquoi un appel n'apparaît-il pas dans l'historique ?", 'Comment exporter un rapport en Excel ?'] as $question)
                    <a href="#"
                        class="flex items-center justify-between
                              p-5
                              rounded-xl
                              border border-slate-200
                              hover:border-indigo-200
                              hover:bg-indigo-50/50
                              transition">

                        <span class="font-medium text-slate-700">
                            {{ $question }}
                        </span>

                        <i data-lucide="chevron-right" class="w-5 h-5 text-slate-400">
                        </i>

                    </a>
                @endforeach

            </div>

        </div>

    </section>


    {{-- Support --}}
    <section id="support" class="bg-indigo-600">

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

                    <p class="mt-3 max-w-xl
                              text-indigo-100">
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
                          text-indigo-600
                          font-semibold
                          hover:bg-indigo-50
                          transition">

                    <i data-lucide="mail" class="w-5 h-5"></i>

                    Contacter le support

                </a>

            </div>

        </div>

    </section>

@endsection
