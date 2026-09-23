@extends('layouts.app')

@section('title', 'Support — Arti Web Docs')

@section('content')
<section class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                <span class="w-2 h-2 rounded-full bg-red-600"></span>
                Support technique
            </div>
            <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                On vous répond,
                <span class="block text-red-600">rapidement.</span>
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-500">
                Une question ou un problème avec Arti Web ? Ouvrez un ticket et notre équipe vous répond sous 24h ouvrées.
            </p>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-14">
    <div class="grid lg:grid-cols-5 gap-8">

        {{-- Infos --}}
        <div class="lg:col-span-2 space-y-5">
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 mb-4">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-lg">Email</h3>
                <p class="mt-1 text-sm text-slate-500">support@artiweb.ma</p>
                <p class="mt-2 text-xs text-slate-400">Réponse sous 24h ouvrées</p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <div class="w-11 h-11 rounded-xl bg-red-50 flex items-center justify-center text-red-600 mb-4">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-lg">Ligne directe</h3>
                <p class="mt-1 text-sm text-slate-500">+212 5XX XX XX XX</p>
                <p class="mt-2 text-xs text-slate-400">Lun–Ven, 9h–18h</p>
            </div>
        </div>

        {{-- Form --}}
        <div class="lg:col-span-3">
            <div class="bg-white rounded-2xl border border-slate-200 p-8">
                <h2 class="text-2xl font-bold">Ouvrir un ticket</h2>
                <p class="mt-2 text-sm text-slate-500">Décrivez votre problème, on s'occupe du reste.</p>

                @if(session('success'))
                    <div class="mt-6 flex items-start gap-3 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm">
                        <i data-lucide="check-circle-2" class="w-5 h-5 shrink-0"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('support.store') }}" method="POST" class="mt-8 space-y-5">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Nom complet</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Votre nom"
                                class="w-full px-4 py-2.5 rounded-lg border @error('name') border-red-400 @else border-slate-200 @enderror bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition">
                            @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="vous@exemple.com"
                                class="w-full px-4 py-2.5 rounded-lg border @error('email') border-red-400 @else border-slate-200 @enderror bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition">
                            @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Catégorie</label>
                            <select name="category"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition">
                                <option value="connexion" @selected(old('category')=='connexion')>Problème de connexion</option>
                                <option value="appels" @selected(old('category')=='appels')>Gestion des appels</option>
                                <option value="compte" @selected(old('category')=='compte')>Compte utilisateur</option>
                                <option value="rapports" @selected(old('category')=='rapports')>Rapports</option>
                                <option value="autre" @selected(old('category')=='autre')>Autre</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Priorité</label>
                            <select name="priority"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition">
                                <option value="basse" @selected(old('priority')=='basse')>Basse</option>
                                <option value="moyenne" @selected(old('priority')=='moyenne') selected>Moyenne</option>
                                <option value="haute" @selected(old('priority')=='haute')>Haute</option>
                                <option value="critique" @selected(old('priority')=='critique')>Critique</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Sujet</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Ex : Impossible de transférer un appel"
                            class="w-full px-4 py-2.5 rounded-lg border @error('subject') border-red-400 @else border-slate-200 @enderror bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition">
                        @error('subject')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Description</label>
                        <textarea name="message" rows="5" placeholder="Décrivez le problème en détail..."
                            class="w-full px-4 py-2.5 rounded-lg border @error('message') border-red-400 @else border-slate-200 @enderror bg-slate-50 text-sm outline-none focus:bg-white focus:border-red-300 focus:ring-2 focus:ring-red-100 transition resize-none">{{ old('message') }}</textarea>
                        @error('message')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                        <i data-lucide="send" class="w-4 h-4"></i>
                        Envoyer le ticket
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection