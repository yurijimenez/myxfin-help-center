<!DOCTYPE html>
<html lang="en">

<head>
    {{-- 1. META TAGS: Tells the browser and Google what the site is about --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
    {{-- 2. OPEN GRAPH: How the link looks when you share it on Facebook or LinkedIn --}}
    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="/assets/img/myxfinlogo.png" />
    <meta property="og:type" content="website" />
    {{-- 3. TITLE & ICONS: What you see on the Browser Tab --}}
    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="icon" type="image/png" href="/assets/img/myxfinlogo.png">
    <link rel="icon" type="image/png" href="/assets/img/myxfinlogo.png?v=1">

    @stack('meta')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet" /> --}}
    @viteRefresh()
    <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

    {{-- @if ($page->docsearchApiKey && $page->docsearchIndexName)
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif --}}
</head>

<body class="h-screen flex flex-col bg-white text-gray-800 leading-normal overflow-hidden" style="font-family: 'Sora', sans-serif;">

    <header class="h-16 shrink-0 sticky top-0 z-50 flex items-center justify-between bg-white border-b px-4">
        <div class="flex items-center">
            <a href="/" class="inline-flex items-center no-underline">
                <img class="h-10 mr-2 w-auto" src="/assets/img/myxfinlogo.png" alt="logo" />
                <h1 class="text-lg md:text-2xl text-[#3b82f6] font-semibold my-0">
                    {{ $page->siteName }}
                </h1>
            </a>
        </div>
        {{-- Header Searchbar --}}
        <div class="flex items-center gap-4 ml-auto">
            {{-- Search Bar --}}
            <div class="relative flex items-center">
                <div class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <input type="text" id="js-search-input" placeholder="Search..." autocomplete="off" spellcheck="false"
                    class="w-32 md:w-64 bg-white border-2 border-gray-200 rounded-full py-2 pl-10 pr-4 text-sm focus:outline-none focus:border-[#3b82f6] focus:ring-4 focus:ring-blue-100 transition-all shadow-sm">
                <div id="js-search-results" class="absolute top-full left-0 w-64 md:w-96 bg-white shadow-xl rounded-xl hidden z-[100] mt-3 border border-gray-100 overflow-hidden divide-y divide-gray-50"></div>
            </div>

            {{-- Language Dropdown --}}
            <div class="relative flex items-center group">
                {{-- Decorative Globe Icon --}}
                <div class="absolute left-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400 group-focus-within:text-[#3b82f6] transition-colors">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
                    </svg>
                </div>

                <select id="language-select"
                    class="appearance-none bg-gray-50 border border-gray-200 text-gray-700 py-2 pl-9 pr-10 rounded-lg text-sm font-medium cursor-pointer 
               hover:bg-white hover:border-[#3b82f6] focus:border-[#3b82f6] focus:ring-4 focus:ring-blue-50 outline-none transition-all shadow-sm">
                    <option value="en">English (US)</option>
                    <option value="tl">Tagalog (PH)</option>
                </select>

                {{-- Custom Arrow Icon --}}
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none flex items-center text-gray-400 group-hover:text-[#3b82f6] transition-colors">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            @yield('nav-toggle')
    </header>

    <main class="flex flex-1 overflow-hidden">
       <nav class="w-64 sidebar-myxfin shrink-0 overflow-y-auto border-none">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <section class="flex-1 flex flex-col overflow-y-auto">
            <div class="flex-1 px-6 lg:px-12 py-10 bg-white">
                @yield('body')
            </div>

           <footer class="bg-white border-t border-gray-100 py-6 mt-12">
    <div class="container mx-auto px-6 text-center">
        <p class="font-sora text-xs font-medium text-gray-400 tracking-wide">
            © 2026 MyxFin. All rights reserved.
        </p>
    </div>
</footer>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>

    {{-- Load Fuse.js --}}
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>

    @stack('scripts')

    <script>
    /** * SEARCH LOGIC (Fuse.js) 
     */
    (function() {
        let fuse = null;

        const loadSearchIndex = (retries = 5) => {
            const v = Date.now();
            fetch('/index.json?v=' + v)
                .then(response => {
                    if (!response.ok) throw new Error("HTTP " + response.status);
                    return response.json();
                })
                .then(data => {
                    if (data && data.length > 0) {
                        fuse = new Fuse(data, {
                            keys: ['title', 'snippet'],
                            threshold: 0.4,
                        });
                        console.log("🚀 SEARCH READY: " + data.length + " items loaded.");
                    } else if (retries > 0) {
                        console.warn(`Index empty, retrying... (${retries} left)`);
                        setTimeout(() => loadSearchIndex(retries - 1), 1000);
                    }
                })
                .catch(err => {
                    if (retries > 0) {
                        setTimeout(() => loadSearchIndex(retries - 1), 1000);
                    } else {
                        console.error("Search index failed to load:", err);
                    }
                });
        };

        // Start loading the index 500ms after page load
        setTimeout(loadSearchIndex, 500);

        const performSearch = () => {
            const searchInput = document.getElementById('js-search-input');
            const searchResults = document.getElementById('js-search-results');

            if (!fuse || !searchInput || !searchResults) return;

            const query = searchInput.value.trim();
            const results = fuse.search(query);
            
            // Detect current language
            const currentPath = window.location.pathname;
            const currentLang = (currentPath.includes('/ph/') || currentPath.includes('/docs/ph/')) ? 'ph' : 'en';

            // Filter results by language
            const filteredResults = results.filter(r => r.item.lang === currentLang);

            if (query.length > 1 && filteredResults.length > 0) {
                searchResults.innerHTML = filteredResults.slice(0, 5).map(r => {
                    const link = r.item.link.startsWith('/') ? r.item.link : '/' + r.item.link;

                    // Remove entire image markdown tag
                    let cleanSnippet = r.item.snippet.replace(/!\[.*?\]\((.*?)\)/g, '');

                    // Remove loose image/asset paths 
                    cleanSnippet = cleanSnippet.replace(/\/[a-zA-Z0-9._/-]+\.(png|jpg|jpeg|svg|gif|webp)/gi, '');

                    // Clean up remaining markdown symbols and double spaces
                    cleanSnippet = cleanSnippet.replace(/[#*!\[\]\(\)]+/g, '')
                        .replace(/\\r|\\n/g, ' ')
                        .replace(/\s\s+/g, ' ');

                    return `
                <a href="${link}" class="block p-4 hover:bg-blue-50 no-underline group transition-all">
                    <div class="flex items-center justify-between">
                        <div class="font-bold text-[#3b82f6] text-sm group-hover:text-[#1d4ed8]">
                            ${r.item.title.replace('#', '').trim()}
                        </div>
                        <svg class="h-3 w-3 text-gray-300 group-hover:text-[#3b82f6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-[12px] text-gray-500 line-clamp-2 mt-1 font-normal leading-relaxed">
                        ${cleanSnippet.trim()}
                    </div>
                </a>
            `;
                }).join('');

                searchResults.classList.remove('hidden');
            } else {
                searchResults.classList.add('hidden');
            }
        };

        // Event delegation for input to match your js-search-input ID
        document.addEventListener('input', (e) => {
            if (e.target && e.target.id === 'js-search-input') {
                performSearch();
            }
        });

        // Clicking outside closes search
        document.addEventListener('click', (e) => {
            const searchInput = document.getElementById('js-search-input');
            const searchResults = document.getElementById('js-search-results');
            if (searchInput && searchResults && !searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.add('hidden');
            }
        });
    })();

    /** * SIDEBAR & LANGUAGE LOGIC 
     */
    document.addEventListener('DOMContentLoaded', function() {
        // --- 1. SIDEBAR MENU INITIAL STATE ---
        const savedState = localStorage.getItem('myxfin_sidebar_state');
        const allToggles = document.querySelectorAll('.js-menu-toggle');

        if (savedState) {
            const openIndexes = JSON.parse(savedState);
            openIndexes.forEach(index => {
                const activeToggle = allToggles[index];
                if (activeToggle) {
                    const activeMenu = activeToggle.nextElementSibling;
                    if (activeMenu && activeMenu.classList.contains('child-menu')) {
                        activeMenu.classList.remove('hidden');
                        activeMenu.style.display = 'block';
                        const arrow = activeToggle.querySelector('svg');
                        if (arrow) arrow.style.transform = 'rotate(180deg)';
                    }
                }
            });
        } else {
            const openMenus = document.querySelectorAll('.child-menu:not(.hidden)');
            openMenus.forEach(menu => {
                menu.style.display = 'block';
                const toggle = menu.previousElementSibling;
                if (toggle && toggle.classList.contains('js-menu-toggle')) {
                    const arrow = toggle.querySelector('svg');
                    if (arrow) arrow.style.transform = 'rotate(180deg)';
                }
            });
        }

       // --- 2. SMART LANGUAGE DROPDOWN LOGIC ---
const langSelect = document.getElementById('language-select');

if (langSelect) {
    // 1. AUTOMATIC DETECTION ON LOAD
    // This part makes the dropdown match the actual URL the user is seeing
    const currentPath = window.location.pathname;
    
    if (currentPath.includes('/ph/') || currentPath.includes('/docs/ph/')) {
        langSelect.value = 'tl';
        localStorage.setItem('myxfin_lang', 'tl');
    } else {
        langSelect.value = 'en';
        localStorage.setItem('myxfin_lang', 'en');
    }

    // 2. CHANGE EVENT (Manual switching)
    langSelect.addEventListener('change', function() {
        localStorage.setItem('myxfin_lang', this.value);
        let path = window.location.pathname;

        if (this.value === 'tl') {
            // Redirect to Tagalog version
            if (path === '/' || path === '/index.html') {
                window.location.href = '/ph/';
            } else if (path.includes('/docs/') && !path.includes('/docs/ph/')) {
                window.location.href = path.replace('/docs/', '/docs/ph/');
            }
        } else {
            // Redirect to English version
            if (path.includes('/docs/ph/')) {
                window.location.href = path.replace('/docs/ph/', '/docs/');
            } else if (path.includes('/ph/')) {
                window.location.href = '/';
            }
        }
    });
}
    });

    /** * SIDEBAR CLICK EVENTS 
     */
    document.addEventListener('click', function(e) {
        const toggle = e.target.closest('.js-menu-toggle');
        if (!toggle) return;

        e.preventDefault();
        const allToggles = Array.from(document.querySelectorAll('.js-menu-toggle'));
        const parentLi = toggle.closest('li');
        const currentChildMenu = parentLi.querySelector('.child-menu');

        if (currentChildMenu) {
            const isOpening = currentChildMenu.classList.contains('hidden');

            // Toggle visibility
            currentChildMenu.classList.toggle('hidden');
            currentChildMenu.style.display = isOpening ? 'block' : 'none';

            const arrow = toggle.querySelector('svg');
            if (arrow) {
                arrow.style.transition = 'transform 0.2s ease';
                arrow.style.transform = isOpening ? 'rotate(180deg)' : 'rotate(0deg)';
            }

            if (isOpening && !toggle.closest('.child-menu')) {
                const topLevelUl = toggle.closest('ul');
                const topLevelMenus = topLevelUl.querySelectorAll(':scope > li > .child-menu');
                topLevelMenus.forEach(menu => {
                    if (menu !== currentChildMenu) {
                        menu.classList.add('hidden');
                        menu.style.display = 'none';
                        const siblingToggle = menu.previousElementSibling;
                        if (siblingToggle) {
                            const siblingArrow = siblingToggle.querySelector('svg');
                            if (siblingArrow) siblingArrow.style.transform = 'rotate(0deg)';
                        }
                    }
                });
            }

            // SAVE STATE
            const openIndexes = [];
            allToggles.forEach((t, index) => {
                const m = t.nextElementSibling;
                if (m && m.style.display === 'block') {
                    openIndexes.push(index);
                }
            });
            localStorage.setItem('myxfin_sidebar_state', JSON.stringify(openIndexes));
        }
    });
</script>