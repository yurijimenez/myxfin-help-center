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
    <meta property="og:image" content="/assets/img/MyxFinlogo.png" />
    <meta property="og:type" content="website" />
    {{-- 3. TITLE & ICONS: What you see on the Browser Tab --}}
    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="icon" type="image/png" href="/assets/img/MyxFinlogo.png">
    <link rel="icon" type="image/png" href="/assets/img/MyxFinlogo.png?v=1">

    @stack('meta')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet" />
    @viteRefresh()
    <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif
</head>

<body class="h-screen flex flex-col bg-white text-gray-800 leading-normal overflow-hidden" style="font-family: 'Sora', sans-serif;">

    <header class="h-16 shrink-0 sticky top-0 z-50 flex items-center justify-between bg-white border-b px-4">
        <div class="flex items-center">
            <a href="/" class="inline-flex items-center no-underline">
                <img class="h-10 mr-2 w-auto" src="/assets/img/MyxFinlogo.png" alt="logo" />
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
                    class="w-32 md:w-56 bg-gray-100 border border-gray-300 rounded-md py-1.5 pl-9 pr-3 text-sm focus:outline-none focus:border-[#3b82f6] focus:ring-1 focus:ring-[#3b82f6] transition-all">

                <div id="js-search-results" class="absolute top-full left-0 w-64 md:w-80 bg-white shadow-2xl rounded-md hidden z-[100] mt-2 border border-gray-200 overflow-hidden"></div>
            </div>

            {{-- Language Dropdown --}}
            <div class="relative flex items-center">
                <select id="language-select" class="appearance-none bg-white border border-gray-300 text-gray-700 py-1.5 pl-3 pr-8 rounded-md text-sm cursor-pointer focus:border-[#3b82f6] outline-none">
                    <option value="en">EN 🇺🇸</option>
                    <option value="tl">TL 🇵🇭</option>
                </select>
                <div class="absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            @yield('nav-toggle')
    </header>

    <main class="flex flex-1 overflow-hidden">
        <nav class="w-64 sidebar-myxfin shrink-0 overflow-y-auto border-r">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <section class="flex-1 flex flex-col overflow-y-auto">
            <div class="flex-1 px-6 lg:px-12 py-10 bg-white">
                @yield('body')
            </div>

            <footer class="bg-white text-center text-sm py-6 border-t">
                <ul class="flex flex-col md:flex-row justify-center list-none p-0 m-0">
                    <li class="md:mr-2">
                        &copy; <a href="https://tighten.co" title="Tighten website">Tighten</a> {{ date('Y') }}.
                    </li>
                    <li>
                        Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                        and <a href="https://tailwindcss.com" title="Tailwind CSS">Tailwind CSS</a>.
                    </li>
                </ul>
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

                if (query.length > 1 && results.length > 0) {
                    searchResults.innerHTML = results.slice(0, 5).map(r => {
                        const link = r.item.link.startsWith('/') ? r.item.link : '/' + r.item.link;
                        return `
                        <a href="${link}" class="block p-4 hover:bg-blue-50 border-b last:border-0 no-underline group transition-colors">
                            <div class="font-bold text-[#3b82f6] text-sm group-hover:text-[#1d4ed8]">${r.item.title}</div>
                            <div class="text-[11px] text-gray-500 line-clamp-1 mt-1">${r.item.snippet}</div>
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
            const openMenus = document.querySelectorAll('.child-menu:not(.hidden)');
            openMenus.forEach(menu => {
                menu.style.display = 'block';
                const toggle = menu.previousElementSibling;
                if (toggle && toggle.classList.contains('js-menu-toggle')) {
                    const arrow = toggle.querySelector('svg');
                    if (arrow) {
                        arrow.style.transform = 'rotate(180deg)';
                        arrow.style.transition = 'none';
                    }
                }
            });

            // --- 2. LANGUAGE DROPDOWN LOGIC ---
            const langSelect = document.getElementById('language-select');
            if (langSelect) {
                const savedLang = localStorage.getItem('myxfin_lang');
                if (savedLang) {
                    langSelect.value = savedLang;
                }

                langSelect.addEventListener('change', function() {
                    localStorage.setItem('myxfin_lang', this.value);

                    let currentPath = window.location.pathname;

                    if (this.value === 'tl') {
                        // If we are NOT already in the ph folder, add /ph/ to the path
                        if (!currentPath.includes('/docs/ph/')) {
                            window.location.href = currentPath.replace('/docs/', '/docs/ph/');
                        }
                    } else {
                        // If we are in the ph folder, remove it to go back to English
                        if (currentPath.includes('/docs/ph/')) {
                            window.location.href = currentPath.replace('/docs/ph/', '/docs/');
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
            const parentLi = toggle.closest('li');
            const currentChildMenu = parentLi.querySelector('.child-menu');

            if (currentChildMenu) {
                const isOpening = currentChildMenu.classList.contains('hidden');

                if (isOpening) {
                    const parentUl = parentLi.closest('ul');
                    const siblingMenus = parentUl.querySelectorAll(':scope > li > .child-menu');

                    siblingMenus.forEach(menu => {
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

                const isNowHidden = currentChildMenu.classList.toggle('hidden');
                currentChildMenu.style.display = isNowHidden ? 'none' : 'block';

                const arrow = toggle.querySelector('svg');
                if (arrow) {
                    arrow.style.transition = 'transform 0.2s ease';
                    arrow.style.transform = isNowHidden ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }
        });
    </script>