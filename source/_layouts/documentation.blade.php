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
    /* Zoomable Image Styling*/
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