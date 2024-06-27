<x-app-layout>
    <<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Greeting message with date --}}
                    <div class="flex items-center justify-between">
                        <p>{{ __("Halo, ") }} {{ auth()->user()->name }}!</p>
                        <p class="text-lg font-medium text-gray-900 dark:text-gray-200" id="current-date"></p>
                    </div>
                    <div class="mt-4">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-1">
                            <!-- Card - Status Kehadiran Karyawan -->
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-700">
                                <div class="p-6">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                        Status absensi hari ini
                                    </h3>
                                    <p class="mt-2 text-4xl font-bold text-gray-900 dark:text-gray-200">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const currentDateElement = document.getElementById('current-date');
        setInterval(() => {
            const currentDate = new Date();
            currentDateElement.textContent = currentDate.toLocaleDateString('id-ID', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }, 1000); // update every 1 second
    </script>
</x-app-layout>
