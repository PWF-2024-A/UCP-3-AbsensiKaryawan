<!-- resources/views/components/ButtonWithIcon.blade.php -->

@props(['href'])

<a href="{{ $href }}"
   class="inline-flex items-center px-3 py-1 text-sm font-medium leading-5 text-blue-500 hover:none">
   <i class="fas fa-eye"></i>
   {{ $slot }}
</a>

