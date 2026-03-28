<x-layout>
    <x-slot:title>Demó Gyerektábor</x-slot>

    {{-- Navbar --}}
    <x-navbar/>


    {{-- Hero --}}
    <x-section>
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-15">
                <div>
                    <div class="prose md:prose-lg">
                        <h1>Balatoni Retró Gyerektábor Szántódon</h1>
                        <p>Családias, nyugodt, megfizethető tábor Balatonszántódon, ahol a digitális zaj helyett a Balaton, a közös játékok és az öröm várja gyerekeit.</p>
                    </div>
                </div>
                <img src="{{ asset('img/kids_1.webp') }}" alt="Gyerekek a táborban" class="w-full h-auto">
            </div>
        </x-container>
    </x-section>

</x-layout>
