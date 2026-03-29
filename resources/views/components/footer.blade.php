<footer class="py-3 bg-amber-50">
    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-3 prose sm:prose-lg max-lg:place-items-center lg:items-center max-w-none">
            <div class="flex 3 divide-x-2 divide-zinc-300 gap-5 lg:order-2 lg:justify-center">
                <a href="#" class="pr-5">Ászf</a>
                <a href="#" class="pr-5">Adatvédelem</a>
                <a href="#" class="whitespace-nowrap">Egy Link</a>
            </div>
            <div class="lg:order-1">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
            </div>
            <div class="lg:order-3">
                <p class="text-center mb-5 max-lg:text-sm! lg:text-right">Weboldalt készítette: <a href="https://eriktailor.hu" target="_blank" rel="noopener noreferrer">ErikTailor</a></p>
            </div>
        </div>
    </x-container>
</footer>