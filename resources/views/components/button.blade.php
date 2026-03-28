@props([
	'href' => null,
	'variant' => 'primary',
	'size' => 'md',
])

@php
	$baseClasses = 'inline-flex items-center justify-center rounded-md font-semibold tracking-tight transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:opacity-60 disabled:cursor-not-allowed';

	$variantClasses = [
		'primary' => 'bg-primary text-white hover:bg-primary/90 focus-visible:ring-primary',
		'secondary' => 'bg-zinc-900 text-white hover:bg-zinc-800 focus-visible:ring-zinc-700',
		'empty' => 'bg-transparent text-zinc-800 hover:bg-zinc-100 focus-visible:ring-zinc-400',
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
