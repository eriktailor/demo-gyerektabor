@props([
	'href' => null,
	'variant' => 'primary',
	'size' => 'md',
])

@php
	$baseClasses = 'inline-flex items-center justify-center rounded-md no-underline font-bold tracking-tight transition-colors duration-200 focus:outline-none whitespace-nowrap w-full xs:w-auto';

	$variantClasses = [
		'primary' => 'bg-primary text-white hover:bg-primary/90 shadow-xl shadow-primary/30',
		'secondary' => 'bg-zinc-50 text-zinc-900 hover:bg-zinc-100',
		'empty' => 'bg-transparent text-zinc-900 hover:text-primary',
	];

	$sizeClasses = [
		'sm' => 'h-9 px-3 text-sm',
		'md' => 'h-11 px-5 text-base',
	];

	$resolvedVariantClasses = $variantClasses[$variant] ?? $variantClasses['primary'];
	$resolvedSizeClasses = $sizeClasses[$size] ?? $sizeClasses['md'];

	$classes = trim($baseClasses . ' ' . $resolvedVariantClasses . ' ' . $resolvedSizeClasses);
@endphp

@if ($href)
	<a href="{{ $href }}" {{ $attributes->class($classes) }}>
		{{ $slot }}
	</a>
@else
	<button type="{{ $attributes->get('type', 'button') }}" {{ $attributes->except('type')->class($classes) }}>
		{{ $slot }}
	</button>
@endif
