@php
    $level = $level ?? 1;
    $isFolder = !is_string($item);
    $subItems = $isFolder ? ($item['children'] ?? []) : [];
    $url = $isFolder ? ($item['url'] ?? '#') : $item;
    $indent = $level > 1 ? 'pl-' . (($level - 1) * 4) : '';

    // 1. IMPROVED DETECTION: 
    // Check if the current path is /ph/ OR contains docs/ph/
    $currentPath = $page->getPath();
    $requestUri = $_SERVER['REQUEST_URI'] ?? '';
    
    $isPh = str_contains($currentPath, '/ph') || 
            str_contains($requestUri, '/ph/') || 
            str_ends_with($currentPath, 'ph');

    if ($isPh && $url !== '#') {
        $normalizedUrl = ltrim($url, '/');

        // 2. APPLY PREFIX
        if (str_starts_with($normalizedUrl, 'docs/') && !str_contains($normalizedUrl, 'docs/ph/')) {
            // Fixes /docs/faq -> /docs/ph/faq
            $url = str_replace('docs/', 'docs/ph/', $normalizedUrl);
        } elseif ($normalizedUrl === '' || $normalizedUrl === 'index') {
            // Fixes homepage link -> /ph/
            $url = 'ph/';
        }
    }
@endphp

<li class="list-none m-0 p-0">
    @if ($isFolder)
        {{-- FOLDER TOGGLE --}}
        <div class="js-menu-toggle {{ $indent }} flex items-center justify-between cursor-pointer px-4 py-3 border-b border-white/5 hover:bg-black/10 transition-colors text-white">
            <span class="text-xs font-bold uppercase tracking-widest">{{ $label }}</span>
            <svg class="h-4 w-4 transition-transform duration-200 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <div class="child-menu {{ $page->isActiveParent($item, $label) ? 'block' : 'hidden' }}">
            <ul class="list-none m-0 p-0">
                @foreach ($subItems as $childLabel => $childItem)
                    @include('_nav.menu-item', [
                        'item' => $childItem,
                        'label' => $childLabel,
                        'level' => $level + 1
                    ])
                @endforeach
            </ul>
        </div>
    @else
        {{-- ACTUAL LINK --}}
        <a href="{{ $page->url($url) }}"
        class="block {{ $indent }} px-4 py-2 text-sm {{ $page->isActive($url) ? 'bg-white/20 font-bold' : 'text-white/80' }} hover:bg-white/10 transition-colors">
            {{ $label }}
        </a>
    @endif
</li>