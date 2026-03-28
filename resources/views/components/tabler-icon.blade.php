@props([
	'name' => null,
	'style' => 'outline',
	'strokeWidth' => 2,
])

@php
	$normalizedStyle = in_array($style, ['outline', 'filled'], true) ? $style : 'outline';

	$normalizedName = str($name ?? '')
		->trim()
		->lower()
		->replace('_', '-')
		->replace('icon-tabler-', '')
		->toString();

	$iconPath = base_path('node_modules/@tabler/icons/icons/' . $normalizedStyle . '/' . $normalizedName . '.svg');

	$svgMarkup = null;

	if ($normalizedName !== '' && file_exists($iconPath)) {
		$rawSvg = file_get_contents($iconPath);

		if ($rawSvg !== false) {
			$innerSvg = preg_replace('/^<svg[^>]*>/i', '', trim($rawSvg));
			$innerSvg = preg_replace('/<\/svg>\s*$/i', '', $innerSvg ?? '');

			$resolvedStrokeWidth = $attributes->get('stroke-width', $strokeWidth);

			$svgAttributes = $attributes
				->except('stroke-width')
				->merge([
					'xmlns' => 'http://www.w3.org/2000/svg',
					'viewBox' => '0 0 24 24',
					'fill' => $normalizedStyle === 'filled' ? 'currentColor' : 'none',
					'stroke' => 'currentColor',
					'stroke-width' => $resolvedStrokeWidth,
					'stroke-linecap' => 'round',
					'stroke-linejoin' => 'round',
					'aria-hidden' => 'true',
				])
				->class('icon icon-tabler');

			$svgMarkup = '<svg ' . $svgAttributes . '>' . $innerSvg . '</svg>';
		}
	}
@endphp

@if ($svgMarkup)
	{!! $svgMarkup !!}
@endif
