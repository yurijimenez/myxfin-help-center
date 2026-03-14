@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4 flex justify-center">
    <div class="flex flex-col lg:flex-row w-full justify-center">
        
        <div class="DocSearch-content w-full lg:w-4/5 max-w-5xl break-words pb-16" v-pre>
            <div class="prose max-w-none">
                @yield('content')
            </div>
        </div>

    </div>
</section>

<style>
    .prose h1 { 
        font-size: 2.25rem; font-weight: 800; color: #111827; 
        margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid #e5e7eb; 
    }
    
    .prose h3 { 
        font-size: 1.5rem; font-weight: 700; color: #3b82f6;
        margin-top: 2rem; margin-bottom: 1rem; 
    }
    
    /* ---Circular Numbering --- */
    .prose ol { 
        list-style-type: none !important; 
        counter-reset: step-counter;
        padding-left: 0 !important;
        margin-left: 0 !important;
    }
    
    .prose ol > li { 
        counter-increment: step-counter;
        display: flex !important; /* Flexbox keeps circle and text aligned */
        align-items: flex-start; /* Aligns circle with the TOP line of text */
        margin-bottom: 1.5rem; 
        color: #374151; 
        font-size: 1.05rem;
        line-height: 1.6;
    }

    .prose ol > li::before {
        content: counter(step-counter);
        flex-shrink: 0; /* Prevents circle from squishing */
        margin-right: 1.25rem; /* Space between circle and text */
        background-color: #3b82f6;
        color: white;
        font-weight: bold;
        font-size: 0.9rem;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        /* Matches the line-height of the text for perfect vertical centering */
        margin-top: -0.1rem; 
    }
    
    .prose blockquote { 
        border-left: 4px solid #3b82f6; background-color: #eff6ff; 
        padding: 1.25rem; margin: 2rem 0; font-style: italic; border-radius: 0 8px 8px 0; 
    }
    
    /* --- Zoomable Image Styling --- */
    .prose img { 
        border-radius: 12px; 
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); 
        border: 1px solid #e5e7eb; 
        margin: 2.5rem 0; 
        cursor: zoom-in !important;
        transition: transform 0.2s ease;
    }

    .prose img:hover {
        transform: scale(1.01);
    }

    /* Zoom Overlay Z-index */
    .medium-zoom-overlay { z-index: 90; }
    .medium-zoom-image--opened { z-index: 100; }
</style>

<script src="https://unpkg.com/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
<script>
   
    document.addEventListener('DOMContentLoaded', function() {
        mediumZoom('.prose img', {
            margin: 24,
            background: 'rgba(255, 255, 255, 0.95)',
        });
    });
</script>
@endsection