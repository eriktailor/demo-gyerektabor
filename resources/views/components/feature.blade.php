@props(['icon' => null])

<div {{ $attributes->merge(['class'=>'space-y-5']) }}>
    <div class="size-13 bg-primary rounded-full flex items-center justify-center shadow-xl shadow-primary/30">
        <x-tabler-icon name="{{ $icon }}" class="w-8 h-8 text-white" stroke-width="1.5"/>
    </div>
    {{ $slot }}
</div>