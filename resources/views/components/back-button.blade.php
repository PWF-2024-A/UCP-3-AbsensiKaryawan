@props(['href'])

<a href="{{ $href }}"
   class="inline-block px-3 py-1 text-sm font-medium leading-5 text-white bg-gray-800 rounded-md hover:bg-gray-700">
   {{ $slot }}
</a>
