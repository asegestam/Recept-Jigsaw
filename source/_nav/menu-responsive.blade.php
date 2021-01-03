<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a title="{{ $page->siteName }} Recept" href="/recipes" class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/recipes') ? 'active text-blue' : '' }}">Recept</a>
        </li>
        <li class="pl-4">
            <a title="{{ $page->siteName }} About" href="/about" class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}">Om</a>
        </li>
    </ul>
</nav>