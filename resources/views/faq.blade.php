@extends('layouts.app')

@section('title', 'FAQ — Arti Web Docs')

@section('content')

    {{-- Hero --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16">
            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-sm font-medium">
                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                    FAQ
                </div>
                <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                    Questions
                    <span class="text-red-600">fréquentes</span>
                </h1>
                <p class="mt-6 text-lg leading-8 text-slate-500">
                    Les réponses aux questions les plus courantes sur Arti Web.
                </p>

                {{-- Filtre par catégorie --}}
                <div class="mt-8 flex flex-wrap justify-center gap-2" id="faq-filters">
                    <button data-category="all"
                        class="faq-filter px-4 py-2 rounded-lg text-sm font-medium bg-blue-600 text-white transition">
                        Toutes
                    </button>
                    @foreach($faqs->pluck('category')->unique() as $cat)
                        <button data-category="{{ $cat }}"
                            class="faq-filter px-4 py-2 rounded-lg text-sm font-medium bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition">
                            {{ ucfirst($cat) }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Liste FAQ --}}
    <section class="bg-slate-50">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <div class="space-y-3" id="faq-list">

                @forelse($faqs as $faq)
                    <div class="faq-item rounded-xl border border-slate-200 bg-white overflow-hidden"
                         data-category="{{ $faq->category }}">

                        {{-- Question --}}
                        <button type="button"
                            onclick="toggleFaq(this)"
                            class="w-full flex items-center justify-between gap-4 p-5 text-left hover:bg-blue-50/50 transition">

                            <span class="flex items-center gap-3">
                                <span class="hidden sm:inline-flex px-2.5 py-1 rounded-full text-xs font-medium
                                    @switch($faq->category)
                                        @case('connexion') bg-blue-50 text-blue-600 @break
                                        @case('appels') bg-red-50 text-red-600 @break
                                        @case('clients') bg-blue-50 text-blue-600 @break
                                        @case('rapports') bg-blue-50 text-blue-600 @break
                                        @default bg-red-50 text-red-600
                                    @endswitch">
                                    {{ ucfirst($faq->category) }}
                                </span>

                                <span class="font-medium text-slate-700">{{ $faq->question }}</span>
                            </span>

                            <i data-lucide="chevron-down"
                                class="w-5 h-5 text-blue-500 shrink-0 transition-transform duration-300 faq-chevron"></i>
                        </button>

                        {{-- Réponse --}}
                        <div class="faq-answer hidden px-5 pb-5 pt-1">
                            <p class="text-sm leading-7 text-slate-500 border-t border-slate-100 pt-4">
                                {{ $faq->answer }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-slate-400 py-10">Aucune question pour le moment.</p>
                @endforelse

            </div>

            {{-- Contact --}}
            <div class="mt-12 text-center">
                <p class="text-slate-500 text-sm">Vous ne trouvez pas votre réponse ?</p>
                <a href="{{ route('support') }}"
                    class="mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                    <i data-lucide="headphones" class="w-4 h-4"></i>
                    Contacter le support
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    function toggleFaq(button) {
        const answer = button.nextElementSibling;
        const chevron = button.querySelector('.faq-chevron');

        document.querySelectorAll('.faq-answer').forEach(el => {
            if (el !== answer) el.classList.add('hidden');
        });
        document.querySelectorAll('.faq-chevron').forEach(el => {
            if (el !== chevron) el.classList.remove('rotate-180');
        });

        answer.classList.toggle('hidden');
        chevron.classList.toggle('rotate-180');
    }

    // Filtre par catégorie
    document.querySelectorAll('.faq-filter').forEach(btn => {
        btn.addEventListener('click', () => {
            const cat = btn.dataset.category;

            // Style des boutons
            document.querySelectorAll('.faq-filter').forEach(b => {
                b.classList.remove('bg-blue-600', 'text-white');
                b.classList.add('bg-slate-100', 'text-slate-600');
            });
            btn.classList.remove('bg-slate-100', 'text-slate-600');
            btn.classList.add('bg-blue-600', 'text-white');

            // Filtrer les items
            document.querySelectorAll('.faq-item').forEach(item => {
                const show = cat === 'all' || item.dataset.category === cat;
                item.classList.toggle('hidden', !show);
            });
        });
    });
</script>
@endpush
