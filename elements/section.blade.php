{{-- Stored in /resources/views/components/elements/section.blade.php --}}
<section id="{{ $id ?? uniqid('md-section-') }}" @if(isset($attrs) && filled($attrs)) @foreach($attrs as $attr => $attr_value) {{ $attr }}="{{ $attr_value }}" @endforeach @endif class="md-section @if(isset($classes) && filled($classes) && is_array($classes)) {{ implode(' ', $classes) }} @endif">
{!! $slot !!}
</section>