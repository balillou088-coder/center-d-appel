@extends('layouts.app')

@section('title', 'Gestion des appels — Arti Web Docs')

@section('content')
<div class="flex min-h-[calc(100vh-4rem)]">

    {{-- Table des matières --}}
    <aside class="hidden lg:block w-64 shrink-0 bg-white border-r border-slate-200">
        <div class="sticky top-16 p-5">
            <p class="px-3 mb-3 text-xs font-semibold uppercase tracking-wider text-slate-400">
                Sur cette page
            </p>
            <nav class="space-y-1 text-sm">
                <a href="#repondre" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Répondre à un appel</a>
                <a href="#transferer" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Transférer un appel</a>
                <a href="#attente" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Mettre en attente</a>
                <a href="#notes" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Prendre des notes</a>
                <a href="#historique" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Historique</a>
            </nav>
        </div>
    </aside>

    {{-- Contenu --}}
    <article class="flex-1 min-w-0">
        <div class="max-w-3xl mx-auto px-6 py-14">

            {{-- Fil d'Ariane --}}
            <div class="flex items-center gap-2 text-sm text-slate-400">
                <a href="#" class="hover:text-red-600">Guides</a>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span class="text-slate-600 font-medium">Gestion des appels</span>
            </div>

            {{-- Hero --}}
            <div class="mt-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                    <i data-lucide="phone" class="w-4 h-4"></i> Guide agent
                </div>
                <h1 class="mt-4 text-4xl font-bold tracking-tight">Gestion des appels</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Apprenez à gérer vos appels dans Arti Web : répondre, transférer,
                    mettre en attente et consulter l'historique.
                </p>
                <div class="mt-6 flex items-center gap-4 text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i> 5 min de lecture
                    </span>
                    <span class="flex items-center gap-1">
                        <i data-lucide="user" class="w-3.5 h-3.5"></i> Tous les agents
                    </span>
                </div>
            </div>

            <hr class="my-10 border-slate-200">

            {{-- 1. Répondre --}}
            <section id="repondre" class="scroll-mt-24">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">1</span>
                    Répondre à un appel
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Quand un appel entrant arrive, une notification sonore retentit et
                    une fenêtre d'appel s'affiche en bas à droite de votre écran.
                </p>
                <ol class="mt-5 space-y-3">
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">1</span>
                        <p class="text-sm text-slate-600 leading-6">Cliquez sur le bouton vert <strong>« Décrocher »</strong> ou appuyez sur <kbd class="px-1.5 py-0.5 bg-slate-100 border border-slate-200 rounded text-xs">Entrée</kbd>.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">2</span>
                        <p class="text-sm text-slate-600 leading-6">La fiche client s'ouvre automatiquement si le numéro est connu.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">3</span>
                        <p class="text-sm text-slate-600 leading-6">Saluez le client et traitez sa demande.</p>
                    </li>
                </ol>
                <div class="mt-5 flex gap-3 p-4 rounded-xl bg-blue-50 border border-blue-100">
                    <i data-lucide="lightbulb" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
                    <p class="text-sm text-blue-700 leading-6">
                        <strong>Astuce :</strong> activez le « Mode occupé » si vous ne pouvez pas prendre d'appels.
                    </p>
                </div>
            </section>

            {{-- 2. Transférer --}}
            <section id="transferer" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">2</span>
                    Transférer un appel
                </h2>
                <p class="mt-4 text-slate-600 leading-7">Deux types de transfert sont disponibles :</p>
                <div class="mt-5 grid sm:grid-cols-2 gap-4">
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-blue-600 font-semibold text-sm">
                            <i data-lucide="arrow-right-circle" class="w-4 h-4"></i> Transfert direct
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">L'appel est transféré immédiatement sans annonce.</p>
                    </div>
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-red-600 font-semibold text-sm">
                            <i data-lucide="users" class="w-4 h-4"></i> Transfert accompagné
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">Vous parlez d'abord au collègue avant de transférer. Recommandé.</p>
                    </div>
                </div>
                <ol class="mt-5 space-y-3">
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">1</span>
                        <p class="text-sm text-slate-600 leading-6">Pendant l'appel, cliquez sur <strong>« Transférer »</strong>.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">2</span>
                        <p class="text-sm text-slate-600 leading-6">Recherchez un agent disponible (vert) ou saisissez un numéro externe.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">3</span>
                        <p class="text-sm text-slate-600 leading-6">Cliquez sur <strong>« Transférer »</strong> pour confirmer.</p>
                    </li>
                </ol>
            </section>

            {{-- 3. Attente --}}
            <section id="attente" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">3</span>
                    Mettre en attente
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Cliquez sur <strong>« Attente »</strong> pour mettre le client en attente
                    (musique automatique). Revenez via <strong>« Reprendre »</strong>.
                </p>
                <div class="mt-5 flex gap-3 p-4 rounded-xl bg-amber-50 border border-amber-100">
                    <i data-lucide="alert-triangle" class="w-5 h-5 text-amber-600 shrink-0 mt-0.5"></i>
                    <p class="text-sm text-amber-700 leading-6">
                        <strong>Attention :</strong> après 5 minutes d'attente, l'appel raccroche automatiquement.
                    </p>
                </div>
            </section>

            {{-- 4. Notes --}}
            <section id="notes" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">4</span>
                    Prendre des notes
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Pendant l'appel, l'onglet <strong>« Notes »</strong> est disponible dans la fiche d'appel.
                    Sauvegarde automatique toutes les 30 secondes.
                </p>
                <div class="mt-5 p-5 rounded-xl bg-slate-900 text-slate-300 text-sm leading-6 font-mono">
                    <span class="text-slate-500">// Exemple de note structurée :</span><br>
                    Client : M. Dupont<br>
                    Demande : réclamation facture N°2026-0847<br>
                    Action : transféré au service comptabilité<br>
                    Rappel : client rappelé d'ici 48h
                </div>
            </section>

            {{-- 5. Historique --}}
            <section id="historique" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">5</span>
                    Consulter l'historique
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Allez dans <strong>Appels → Historique</strong>. Filtrez par date, agent,
                    statut et exportez en CSV.
                </p>
                <div class="mt-5 overflow-hidden rounded-xl border border-slate-200">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-100 text-slate-500 text-xs uppercase">
                            <tr>
                                <th class="px-4 py-3 text-left">Date</th>
                                <th class="px-4 py-3 text-left">Numéro</th>
                                <th class="px-4 py-3 text-left">Agent</th>
                                <th class="px-4 py-3 text-left">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 text-slate-600">
                            <tr>
                                <td class="px-4 py-3">22/09 14:32</td>
                                <td class="px-4 py-3">+212 6XX XX XX</td>
                                <td class="px-4 py-3">Salma</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-green-50 text-green-600 text-xs font-medium">Répondu</span></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">22/09 14:15</td>
                                <td class="px-4 py-3">+212 5XX XX XX</td>
                                <td class="px-4 py-3">—</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-red-50 text-red-600 text-xs font-medium">Manqué</span></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">22/09 13:58</td>
                                <td class="px-4 py-3">+212 7XX XX XX</td>
                                <td class="px-4 py-3">Karim</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-medium">Transféré</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            {{-- Navigation entre guides --}}
            <div class="mt-14 flex items-center justify-between border-t border-slate-200 pt-8">
                <a href="#" class="flex items-center gap-2 text-sm text-slate-500 hover:text-red-600">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Connexion et comptes
                </a>
                <a href="#" class="flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700">
                    Clients et contacts <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>
    </article>
</div>
@endsection