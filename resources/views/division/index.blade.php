<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Divisi Karyawan') }}
        </h2>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-10 lg:px-12">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="px-6 pt-6 mb-5">
                    <div>
                        <x-create-button href="{{ route('division.create') }}" />
                    </div>
                </div>
                <div class="relative overflow-x-auto">
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th scope="col" class="w-3/4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-100 px-28 dark:bg-gray-700">
                                    Division
                                </th>
                                <th scope="col" class="w-1/4 px-10 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-100 dark:bg-gray-700">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisions as $division)
                                <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                    <td class="flex items-center w-1/2 py-4 text-sm font-medium text-gray-900 px-28 justify-items-center whitespace-nowrap dark:text-white">
                                        {{ $division->title }}
                                    </td>
                                    <td class="w-1/2 px-6 py-4">
                                        <div class="flex items-center space-x-2">
                                            <x-edit-button href="{{ route('division.edit', $division) }}" />
                                            <x-delete-button :action="route('division.destroy', $division->id)" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
