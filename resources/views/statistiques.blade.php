@extends('layouts.app')

@section('title', 'Statistiques — Arti Web Docs')

@section('content')
<div class="flex min-h-[calc(100vh-4rem)]">

    {{-- Table des matières --}}
    <aside class="hidden lg:block w-64 shrink-0 bg-white border-r border-slate-200">
        <div class="sticky top-16 p-5">
            <p class="px-3 mb-3 text-xs font-semibold uppercase tracking-wider text-slate-400">
                Sur cette page
            </p>
            <nav class="space-y-1 text-sm">
                <a href="#indicateurs" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Indicateurs clés (KPI)</a>
                <a href="#tableau" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Tableau de bord</a>
                <a href="#agents" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Statistiques par agent</a>
                <a href="#periodes" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Choisir une période</a>
                <a href="#export" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Exporter les données</a>
                <a href="#planification" class="block px-3 py-2 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Envoi automatique</a>
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
                <span class="text-slate-600 font-medium">Statistiques</span>
            </div>

            {{-- Hero --}}
            <div class="mt-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-sm font-medium">
                    <i data-lucide="bar-chart-3" class="w-4 h-4"></i> Guide superviseur
                </div>
                <h1 class="mt-4 text-4xl font-bold tracking-tight">Statistiques</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Suivez le volume d'appels, la durée moyenne et la performance
                    de chaque équipe grâce aux statistiques d'Arti Web.
                </p>
                <div class="mt-6 flex items-center gap-4 text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i> 7 min de lecture
                    </span>
                    <span class="flex items-center gap-1">
                        <i data-lucide="user" class="w-3.5 h-3.5"></i> Superviseurs et admins
                    </span>
                </div>
            </div>

            <hr class="my-10 border-slate-200">

            {{-- 1. KPI --}}
            <section id="indicateurs" class="scroll-mt-24">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">1</span>
                    Indicateurs clés (KPI)
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Arti Web calcule automatiquement les indicateurs essentiels de votre centre d'appels :
                </p>
                <div class="mt-5 grid sm:grid-cols-2 gap-4">
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-blue-600 text-sm">
                            <i data-lucide="phone-incoming" class="w-4 h-4"></i> <strong>Volume d'appels</strong>
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">Appels entrants, sortants, manqués et transférés, jour par jour.</p>
                    </div>
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-blue-600 text-sm">
                            <i data-lucide="timer" class="w-4 h-4"></i> <strong>Durée moyenne</strong>
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">Talk time moyen par agent et par équipe (ATT, AHT).</p>
                    </div>
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-red-600 text-sm">
                            <i data-lucide="phone-missed" class="w-4 h-4"></i> <strong>Taux d'abandon</strong>
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">Pourcentage d'appels abandonnés avant la prise en charge.</p>
                    </div>
                    <div class="p-5 rounded-xl bg-white border border-slate-200">
                        <div class="flex items-center gap-2 text-red-600 text-sm">
                            <i data-lucide="gauge" class="w-4 h-4"></i> <strong>Taux de réponse</strong>
                        </div>
                        <p class="mt-2 text-sm text-slate-500 leading-6">Pourcentage d'appels décrochés sous 20 secondes (SLA).</p>
                    </div>
                </div>
            </section>

            {{-- 2. Tableau de bord --}}
            <section id="tableau" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">2</span>
                    Tableau de bord
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Le tableau de bord s'affiche dès la connexion pour les superviseurs. Il présente les chiffres du jour :
                </p>
                <div class="mt-5 grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-white border border-slate-200 text-center">
                        <p class="text-2xl font-bold text-blue-600">342</p>
                        <p class="text-xs text-slate-400 mt-1">Appels reçus</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-slate-200 text-center">
                        <p class="text-2xl font-bold text-blue-600">4m 12s</p>
                        <p class="text-xs text-slate-400 mt-1">Durée moyenne</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-slate-200 text-center">
                        <p class="text-2xl font-bold text-red-600">3.2%</p>
                        <p class="text-xs text-slate-400 mt-1">Abandons</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-slate-200 text-center">
                        <p class="text-2xl font-bold text-blue-600">96%</p>
                        <p class="text-xs text-slate-400 mt-1">SLA 20s</p>
                    </div>
                </div>
                <div class="mt-5 flex gap-3 p-4 rounded-xl bg-blue-50 border border-blue-100">
                    <i data-lucide="lightbulb" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
                    <p class="text-sm text-blue-700 leading-6">
                        <strong>Astuce :</strong> les données se rafraîchissent toutes les 5 minutes.
                        Cliquez sur « Actualiser » pour forcer la mise à jour.
                    </p>
                </div>
            </section>

            {{-- 3. Statistiques par agent --}}
            <section id="agents" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">3</span>
                    Statistiques par agent
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Statistiques → Par agent : comparez la performance de chaque membre de l'équipe.
                </p>
                <div class="mt-5 overflow-hidden rounded-xl border border-slate-200">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-100 text-slate-500 text-xs uppercase">
                            <tr>
                                <th class="px-4 py-3 text-left">Agent</th>
                                <th class="px-4 py-3 text-left">Appels</th>
                                <th class="px-4 py-3 text-left">Durée moy.</th>
                                <th class="px-4 py-3 text-left">Taux réponse</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 text-slate-600">
                            <tr>
                                <td class="px-4 py-3 font-medium">Salma B.</td>
                                <td class="px-4 py-3">87</td>
                                <td class="px-4 py-3">3m 48s</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-green-50 text-green-600 text-xs font-medium">98%</span></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-medium">Karim E.</td>
                                <td class="px-4 py-3">92</td>
                                <td class="px-4 py-3">4m 05s</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-green-50 text-green-600 text-xs font-medium">95%</span></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-medium">Yassine M.</td>
                                <td class="px-4 py-3">74</td>
                                <td class="px-4 py-3">5m 22s</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full bg-amber-50 text-amber-600 text-xs font-medium">88%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-5 flex gap-3 p-4 rounded-xl bg-amber-50 border border-amber-100">
                    <i data-lucide="alert-triangle" class="w-5 h-5 text-amber-600 shrink-0 mt-0.5"></i>
                    <p class="text-sm text-amber-700 leading-6">
                        <strong>Attention :</strong> les statistiques par agent ne sont visibles
                        que par les superviseurs et administrateurs.
                    </p>
                </div>
            </section>

            {{-- 4. Périodes --}}
            <section id="periodes" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">4</span>
                    Choisir une période
                </h2>
                <ol class="mt-5 space-y-3">
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">1</span>
                        <p class="text-sm text-slate-600 leading-6">Ouvrez <strong>Statistiques → Période</strong> en haut de la page.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">2</span>
                        <p class="text-sm text-slate-600 leading-6">Choisissez un préréglage : <em>Aujourd'hui, Hier, 7 derniers jours, Ce mois</em> ou une plage personnalisée.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">3</span>
                        <p class="text-sm text-slate-600 leading-6">Validez — tous les graphiques et tableaux se mettent à jour instantanément.</p>
                    </li>
                </ol>
            </section>

            {{-- 5. Export --}}
            <section id="export" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">5</span>
                    Exporter les données
                </h2>
                <p class="mt-4 text-slate-600 leading-7">Exportez vos statistiques pour Excel ou pour archivage :</p>
                <ol class="mt-5 space-y-3">
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">1</span>
                        <p class="text-sm text-slate-600 leading-6">Appliquez vos filtres (période, équipe, statut).</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">2</span>
                        <p class="text-sm text-slate-600 leading-6">Cliquez sur <strong>« Exporter »</strong> en haut à droite.</p>
                    </li>
                    <li class="flex gap-3">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold">3</span>
                        <p class="text-sm text-slate-600 leading-6">Choisissez le format : <strong>CSV</strong> (rapide, léger) ou <strong>XLSX</strong> (mis en forme).</p>
                    </li>
                </ol>
                <div class="mt-5 p-5 rounded-xl bg-slate-900 text-slate-300 text-sm leading-6 font-mono">
                    <span class="text-slate-500">// Les exports respectent les filtres actifs.</span><br>
                    // Limite : 50 000 lignes par export.<br>
                    // Les exports volumineux sont envoyés par email.
                </div>
            </section>

            {{-- 6. Envoi automatique --}}
            <section id="planification" class="scroll-mt-24 mt-12">
                <h2 class="text-2xl font-bold flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center text-sm font-bold">6</span>
                    Envoi automatique
                </h2>
                <p class="mt-4 text-slate-600 leading-7">
                    Automatisez l'envoi de vos statistiques : Statistiques → <strong>Planifier</strong> →
                    choisissez la fréquence (quotidien, hebdomadaire, mensuel), les destinataires
                    et le format. Les chiffres partiront automatiquement par email.
                </p>
            </section>

            {{-- Navigation entre guides --}}
            <div class="mt-14 flex items-center justify-between border-t border-slate-200 pt-8">
                <a href="#" class="flex items-center gap-2 text-sm text-slate-500 hover:text-red-600">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Clients et contacts
                </a>
                <a href="#" class="flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700">
                    Administration <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>
    </article>
</div>
@endsection