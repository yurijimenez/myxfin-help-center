@extends('_layouts.master')

@section('body')
<div class="max-w-4xl mx-auto px-6 py-12">
    <div class="mb-10 text-center">
       <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4" style="font-family: 'Sora', sans-serif;">
    @php
        // This splits "Common Questions" into ["Common", "Questions"]
        $titleParts = explode(' ', $page->title);
    @endphp

    @if(count($titleParts) > 1)
        {{ $titleParts[0] }} <span style="color: #3b82f6;">{{ $titleParts[1] }}</span>
    @else
        <span style="color: #3b82f6;">{{ $page->title }}</span>
    @endif
</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto" style="font-family: 'DM Sans', sans-serif;">
            {{ $page->description }}
        </p>
    </div>

    <div class="mb-6 relative">
        <input 
            type="text" 
            id="faqSearch" 
            placeholder="Search for questions or keywords..." 
            class="w-full p-4 pl-12 rounded-xl border border-gray-200 focus:border-[#3b82f6] focus:ring-2 focus:ring-[#3b82f6]/20 outline-none transition-all shadow-sm"
        >
        <svg class="w-6 h-6 absolute left-4 top-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </div>

    <div class="faq-grid space-y-4" id="faqGrid">
        @yield('content')
    </div>

    <div id="noResults" class="hidden text-center py-10 text-gray-500">
        No results found for your search.
    </div>
</div>

<script>
    // 1. Accordion Toggle Logic
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            
            // Optional: Close other open items when one is clicked
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                }
            });

            faqItem.classList.toggle('active');
        });
    });

    // 2. Search Filter Logic
    const searchInput = document.getElementById('faqSearch');
    const faqItems = document.querySelectorAll('.faq-item');
    const noResults = document.getElementById('noResults');

    searchInput.addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        let foundAny = false;

        faqItems.forEach(item => {
            // Searches both the question text and the answer text
            const question = item.querySelector('.faq-question span').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

            if (question.includes(term) || answer.includes(term)) {
                item.style.display = "block";
                foundAny = true;
            } else {
                item.style.display = "none";
            }
        });

        // Show/Hide "No Results" message
        if (foundAny) {
            noResults.classList.add('hidden');
        } else {
            noResults.classList.remove('hidden');
        }
    });
</script>
@endsection