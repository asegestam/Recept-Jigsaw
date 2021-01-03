<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Recept" href="/recipes" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/recipes') ? 'active text-blue-600' : '' }}">
        Recept
    </a>

    <a title="{{ $page->siteName }} About" href="/about" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        Om
    </a>
</nav>