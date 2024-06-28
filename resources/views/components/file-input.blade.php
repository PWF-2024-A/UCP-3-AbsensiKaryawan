@props(['onchange' => ''])

<input type="file" {{ $attributes->merge(['class' => 'block w-full text-sm text-gray-500 py-2 px-4 rounded-md border-0 text-sm font-semibold bg-indigo-50 text-indigo-700 hover:bg-indigo-100']) }} onchange="{{ $onchange }}">
