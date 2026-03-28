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

</x-layout>
