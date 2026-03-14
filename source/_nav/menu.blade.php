@php
    $level = $level ?? 0; //If no links were provided, just use an empty list.
    $items = $items ?? [];
@endphp
{{--Pass the current item's data to 'menu-item.blade.php' --}}
@if ($level === 0)
    <ul class="my-0 list-none pl-0"> 
        @foreach ($items as $label => $item)
            @include('_nav.menu-item', [
                'item' => $item,
                'label' => $label,
                'level' => 1
            ])
        @endforeach
    </ul>
@endif