@props(['rows' => 2])

<textarea {{ $attributes->merge(['class' => 'form-control block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 dark:focus:ring-indigo-600 dark:focus:border-indigo-600']) }} rows="{{ $rows }}"></textarea>
