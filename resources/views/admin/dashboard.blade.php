<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <div class="mt-4">

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card 1 - Jumlah Karyawan Terdaftar -->
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-700">
                                <div class="p-6">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                        Jumlah Karyawan Terdaftar
                                    </h3>
                                    <p class="mt-2 text-4xl font-bold text-gray-900 dark:text-gray-200">
                                        {{ $total_users }}
                                    </p>
                                    {{-- <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                        Total Pengguna
                                    </p> --}}
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-700">
                                <div class="p-6">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                        Jumlah Karyawan Presensi Hari Ini
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        Card 2 Description lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-700">
                                <div class="p-6">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                        Jumlah Karyawan Presensi Bulan Ini
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        Card 3 Description lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
