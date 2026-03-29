<x-layout>
    <x-slot:title>Demó Gyerektábor</x-slot>

    {{-- Navbar --}}
    <x-navbar/>


    {{-- Hero --}}
    <x-section>
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                <div class="md:col-span-2">
                    <div class="prose sm:prose-lg mb-10 md:mb-15">
                        <h1>Balatoni <em>Retró</em> Gyerektábor Szántódon</h1>
                        <p class="lg:max-w-sm">Családias, nyugodt, megfizethető tábor Balatonszántódon, ahol a digitális zaj helyett a Balaton, a közös játékok és az öröm várja gyerekeit.</p>
                    </div>
                    <div class="flex flex-col xs:flex-row items-center gap-3">
                        <x-button href="#" variant="primary" size="md">
                            Online Foglalok
                        </x-button>
                        <x-button href="#" variant="empty" size="md" class="group">
                            Tovább Olvasok
                            <x-tabler-icon name="arrow-narrow-right" class="ml-1 w-6 h-6 text-zinc-900 group-hover:text-primary group-hover:translate-x-1.5 transition-all" stroke-width="1.5" />
                        </x-button>
                    </div>
                </div>
                <div class="md:col-span-3">
                    <img src="{{ asset('img/kids_1.webp') }}" alt="Gyerekek a táborban" class="w-auto h-full object-contain">
                </div>
            </div>
        </x-container>
    </x-section>

    {{-- Problem --}}
    <x-section class="bg-amber-50">
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-0 md:gap-10">
                <div class="max-md:order-2 md:col-span-2">
                    <img src="{{ asset('img/kids_2.webp') }}" alt="Gyerek sokat telefonozik" class="w-auto h-full object-contain">
                </div>
                <div class="max-md:order-1 md:col-span-3 lg:pl-15">
                    <div class="prose sm:prose-lg mb-10 md:mb-0">
                        <h2>Ha <em>elég</em>, hogy a gyerek...</h2>
                        <div class="grid grid-cols-1 xs:grid-cols-2 gap-10 max-w-150 lg:mb-20">
                            <blockquote>Túl sok időt tölt a képernyő és monitor előtt</blockquote>
                            <blockquote>Nehezen szakítható ki a telefon, tablet világából</blockquote>
                            <blockquote>Magányos és kevés az igazi élménye</blockquote>
                            <blockquote>Nehezen barátkozik, vagy inkább egyedül van</blockquote>
                        </div>
                        <h3>Nem vele van a baj...<br>Egyszerűen csak eltűntek a régi nyarak.</h3>
                    </div>
                </div>
            </div>
        </x-container>
    </x-section>

    {{-- Solution --}}
    <x-section>
        <x-container>
            <div class="grid grid-cols-1 lg:grid-cols-2 md:gap-10 xl:gap-0">
                <div class="xl:pr-15">
                    <div class="prose sm:prose-lg mb-10 w-full md:max-w-none">
                        <h2 class="sm:mb-10 md:mb-15">Mi <em>visszahozzuk</em> azt, ami működött.</h2>
                        <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-4 lg:grid-cols-2 gap-10 sm:max-md:gap-x-15">
                            <x-feature icon="map-pin">
                                <p><strong>Helyszín:</strong> Balaton, Szántód KFKI Kemping</p>
                            </x-feature>
                            <x-feature icon="school">
                                <p><strong>Tapasztalt</strong>, figyelmes táborvezetők és oktatók</p>
                            </x-feature>
                            <x-feature icon="shield-check">
                                <p><strong>Biztonságos</strong>, jól felszerelt környezet</p>
                            </x-feature>
                            <x-feature icon="device-mobile-off">
                                <p><strong>Kütyümentes</strong> programok és valódi élmények</p>
                            </x-feature>
                        </div>
                        <h3 class="sm:max-lg:max-w-100">Balatoni nyár, ahogy Te megélted.</h3>
                    </div>
                    <x-button href="#" variant="primary" size="md" class="max-xs:hidden">
                        Online Időpontfoglalás
                    </x-button>
                </div>
                <div class="-mt-15 xs:-mt-10 sm:-mt-25 md:-mt-40 lg:-mt-5 mb-10 xs:mb-15 sm:mb-20">
                    <img src="{{ asset('img/kids_3.webp') }}" alt="Gyerek nyári tábor élmények" class="w-full h-auto object-contain scale-115 2xl:scale-130 origin-top-left">
                </div>
            </div>
        </x-container>
    </x-section>

    {{-- Offer --}}
    <x-section class="bg-amber-50">
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-0 md:gap-10">
                <div class="max-md:order-2 md:col-span-2">
                    <img src="{{ asset('img/kids_4.webp') }}" alt="Boldog gyerekek a nyári táborban" class="w-auto h-full object-contain">
                </div>
                <div class="max-md:order-1 md:col-span-3 lg:pl-15">
                    <div class="prose sm:prose-lg mb-10 md:mb-0">
                        <h2>Mit <em>kap</em> a gyerek?</h2>
                        <div class="grid grid-cols-1 xs:grid-cols-2 gap-10 max-w-130 lg:mb-20">
                            <blockquote>Egész napos szabadtéri programok</blockquote>
                            <blockquote>Közösségi élmények, új barátok</blockquote>
                            <blockquote>Mozgás, játék, nevetés a szabadban</blockquote>
                            <blockquote>Strukturált, mégis laza napirend</blockquote>
                        </div>
                        <h3>Nem tanulótábor...<br>Nem fejlesztő tábor...<br>Ez egy igazi nyári tábor, ahogy régen volt.</h3>
                    </div>
                </div>
            </div>
        </x-container>
    </x-section>

    {{-- Desire --}}
    <x-section>
        <x-container>
            <div class="prose sm:prose-lg lg:max-w-none mb-10">
                <h2>Mi <em>élményeket</em> adunk, amikre még évek múlva is emlékezni fognak.</h2>
            </div>
            <div class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-5 2xl:grid-cols-6 gap-10 sm:gap-x-15 lg:gap-x-10 lg:place-items-center mb-10 xs:mb-15">
                <x-feature icon="ball-football">
                    <p><strong>Foci</strong> a poros pályán</p>
                </x-feature>
                <x-feature icon="ping-pong">
                    <p><strong>Pingpong</strong> a haverokkal</p>
                </x-feature>
                <x-feature icon="code-asterisk">
                    <p><strong>Tollas</strong> a naplementében</p>
                </x-feature>
                <x-feature icon="sunset-2">
                    <p><strong>Strandolás</strong> a Balatonon</p>
                </x-feature>
                <x-feature icon="campfire">
                    <p><strong>Tábortűz</strong> és bogrács</p>
                </x-feature>
                <x-feature icon="leaf" class="last-of-type:md:max-2xl:hidden">
                    <p><strong>Séták</strong> a természetben</p>
                </x-feature>
            </div>
            <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 xl:grid-cols-5 gap-y-5 xs:gap-x-5">
                <div class="sm:col-span-2 md:col-span-1 md:flex md:flex-col space-y-5">
                    <div class="prose sm:prose-lg max-w-none">
                        <h3>Ez az a nyár, amit te is megéltél és amit most ő is megélhet.</h3>
                    </div>
                    <img src="{{ asset('img/fun_1.webp') }}" alt="Társasjátékozó gyerekek" class="w-full h-auto md:grow object-cover rounded-2xl shadow-lg shadow-zinc-600/30">
                </div>
                <div class="xl:col-span-2 2xl:col-span-3">
                    <img src="{{ asset('img/fun_2.webp') }}" alt="Tábortűz és gyerekek" class="w-auto h-full object-cover rounded-2xl xs:origin-center shadow-lg shadow-zinc-600/30">
                </div>
                <div class="xs:col-span-2 sm:col-span-3 xl:col-span-2 2xl:col-span-1 md:col-span-1 space-y-5">
                    <img src="{{ asset('img/fun_3.webp') }}" alt="Pingpongozó gyerek" class="w-full h-auto md:h-full object-cover rounded-2xl shadow-lg shadow-zinc-600/30">
                    <x-button href="#" variant="primary" size="md" class="xs:w-full sm:hidden">
                        Online Időpontfoglalás
                    </x-button>
                </div>
            </div>
            
        </x-container>
    </x-section>

    {{-- Contact --}}
    <x-section class="bg-amber-50 md:pb-10! lg:pb-0!">
        <x-container>
            <div class="prose sm:prose-lg mb-10">
                <h2>Jelentkezz <em>most</em></h2>
                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-10 xl:gap-20 max-w-150 mb-10 lg:max-xl:mb-15">
                    <blockquote>Takács Éva<br><a href="#">+36 30 533 6724</a></blockquote>
                    <blockquote class="max-sm:hidden md:hidden lg:block">8120 Siófok,<br> Főház utca 12.</blockquote>
                    <blockquote>Email<br><a href="mailto:info@example.com">info@tabor.hu</a></blockquote>
                </div>
            </div>
            <div class="bg-primary rounded-2xl p-10 pb-0 md:py-0 lg:px-15 dark prose-invert prose sm:prose-lg max-w-none md:grid md:grid-cols-2 md:gap-10">
                <div class="flex flex-col justify-center items-start md:h-full md:min-h-80">
                    <h3 class="mt-0!">Ne hagyd ki ezt a nyarat!</h3>
                    <p class="text-white/80! text-wrap">Foglalj helyet most, és biztosítsd, hogy gyereked egy felejthetetlen balatoni kalandban részesüljön!</p>
                    <x-button href="#" variant="secondary" size="md" class="max-sm:w-full">
                        Online Időpontfoglalás
                    </x-button>
                </div>
                <img src="{{ asset('img/kids_5.webp') }}" alt="Gyerekek nyári tábora" class="w-full h-auto xs:max-h-70 sm:max-h-100 max-xs:object-contain object-cover object-top md:-mt-35 md:scale-110 xl:scale-100 md:origin-bottom-left lg:-mt-50 lg:max-h-150">
            </div>
        </x-container>
    </x-section>

    <x-footer/>

</x-layout>
