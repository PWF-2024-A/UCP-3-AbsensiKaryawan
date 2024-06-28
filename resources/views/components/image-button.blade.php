<!-- resources/views/components/preview-image-button.blade.php -->
@props(['imageSrc'])

<button {{ $attributes->merge(['class' => 'px-2 py-1 text-white bg-gray-800 rounded-md hover:bg-gray-700']) }}
        data-image-src="{{ $imageSrc }}">
    {{ $slot }}
</button>
