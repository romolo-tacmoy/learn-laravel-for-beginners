@props(['highlight' => false])

<div class="flex justify-between items-center bg-white px-2 py-4 mt-2" @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
