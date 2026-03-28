<nav class="py-4 bg-white sticky top-0 z-40" data-navbar>
    <x-container>
        <div class="flex items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <img src="{{ asset('img/logo.webp') }}" alt="Logó" class="h-8 w-auto">
                <strong>Offline Gyerektábor</strong>
            </div>

            <div class="hidden md:flex items-center gap-10">
                <a class="nav-link" href="#">Rólunk</a>
                <a class="nav-link" href="#">Programok</a>
                <a class="nav-link" href="#">Élmények</a>
                <a class="nav-link" href="#">Jelentkezés</a>
                <a class="nav-link" href="#">Kapcsolat</a>
            </div>

            <button
                type="button"
                class="md:hidden relative inline-flex h-10 w-10 items-center justify-center rounded-md border border-zinc-200 text-zinc-700 transition hover:bg-zinc-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-zinc-400"
                aria-label="Menü megnyitása"
                aria-expanded="false"
                aria-controls="mobile-nav-menu"
                data-navbar-toggle
            >
                <span class="sr-only">Menü</span>
                <span class="relative block h-5 w-6">
                    <span
                        class="absolute left-0 top-0 block h-0.5 w-6 rounded bg-current transition-transform duration-300 ease-out"
                        data-line-top
                    ></span>
                    <span
                        class="absolute left-0 top-2 block h-0.5 w-6 rounded bg-current transition-all duration-300 ease-out"
                        data-line-middle
                    ></span>
                    <span
                        class="absolute left-0 top-4 block h-0.5 w-6 rounded bg-current transition-transform duration-300 ease-out"
                        data-line-bottom
                    ></span>
                </span>
            </button>
        </div>

        <div
            id="mobile-nav-menu"
            class="md:hidden grid grid-rows-[0fr] opacity-0 pointer-events-none transition-all duration-300 ease-out"
            data-navbar-menu
        >
            <div class="overflow-hidden">
                <div class="flex flex-col gap-4 mt-3 py-3 border-t border-zinc-200">
                    <a href="#">Rólunk</a>
                    <a href="#">Programok</a>
                    <a href="#">Élmények</a>
                    <a href="#">Jelentkezés</a>
                    <a href="#">Kapcsolat</a>
                </div>
            </div>
        </div>
    </x-container>
</nav>

@once
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbars = document.querySelectorAll('[data-navbar]');

            navbars.forEach(function (navbar) {
                const button = navbar.querySelector('[data-navbar-toggle]');
                const menu = navbar.querySelector('[data-navbar-menu]');
                const topLine = navbar.querySelector('[data-line-top]');
                const middleLine = navbar.querySelector('[data-line-middle]');
                const bottomLine = navbar.querySelector('[data-line-bottom]');

                if (!button || !menu || !topLine || !middleLine || !bottomLine) {
                    return;
                }

                let isOpen = false;

                function setMenuState(open) {
                    isOpen = open;
                    button.setAttribute('aria-expanded', open ? 'true' : 'false');
                    button.setAttribute('aria-label', open ? 'Menü bezárása' : 'Menü megnyitása');

                    menu.classList.toggle('grid-rows-[1fr]', open);
                    menu.classList.toggle('opacity-100', open);
                    menu.classList.toggle('pointer-events-auto', open);
                    menu.classList.toggle('grid-rows-[0fr]', !open);
                    menu.classList.toggle('opacity-0', !open);
                    menu.classList.toggle('pointer-events-none', !open);

                    topLine.classList.toggle('translate-y-2', open);
                    topLine.classList.toggle('rotate-45', open);
                    middleLine.classList.toggle('opacity-0', open);
                    middleLine.classList.toggle('scale-x-0', open);
                    bottomLine.classList.toggle('-translate-y-2', open);
                    bottomLine.classList.toggle('-rotate-45', open);
                }

                button.addEventListener('click', function () {
                    setMenuState(!isOpen);
                });

                const desktopMediaQuery = window.matchMedia('(min-width: 768px)');
                desktopMediaQuery.addEventListener('change', function (event) {
                    if (event.matches) {
                        setMenuState(false);
                    }
                });

                menu.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', function () {
                        setMenuState(false);
                    });
                });
            });
        });
    </script>
@endonce