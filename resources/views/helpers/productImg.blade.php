@php
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }
@endphp

<img src="{{ asset('images/promotions/' . $imgFile) }}" {!! $attrs !!}>
