<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Presence') }}
        </h2>
    </x-slot>

    @if (session()->has('success'))
    <div class="w-full max-w-md mx-auto mt-4">
        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 xl:w-1/2">
                    <div class="overflow-hidden bg-white dark:bg-gray-800 sm:shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                {{ __("Absensi Keluar") }}
                            </div>
                            <form method="POST" action="{{ route('presensi.update', $presence->id ) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @foreach ($users as $user)
                                    <div class="mb-3">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="block w-full mt-1" value="{{ $user->name }}" readonly autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                    <div class="mb-3">
                                        <x-input-label for="divisions_id" :value="__('Divisi')" />
                                        <x-select-divisi id="divisions_id" name="divisions_id" :options="$divisions->pluck('title', 'id')" :selected="$user->presence ? $user->presence->divisions_id : null" />
                                        <x-input-error class="mt-2" :messages="$errors->get('divisions_id')" />
                                    </div>

                                    <div class="mb-3">
                                        <x-input-label for="status" class="form-label">Status</x-input-label>
                                        <x-select name="status" id="status" :options="['Hadir' => 'Hadir', 'Sakit' => 'Sakit', 'Cuti' => 'Cuti']" />
                                    </div>

                                    <div class="flex flex-wrap -mx-2">
                                        <div class="w-full px-2 mb-3 lg:w-full">
                                            <x-input-label for="date" class="form-label">Tanggal</x-input-label>
                                            <x-date-input id="date" name="date" value="{{ now()->timezone('Asia/Jakarta')->format('Y-m-d') }}" readonly />

                                        </div>
                                        <div class="w-full px-2 mb-3 lg:w-full">
                                            <x-input-label for="out" class="form-label">Jam</x-input-label>
                                            <x-time-input id="out" name="out" readonly/>
                                        </div>
                                    </div>
                                @endforeach
                                <x-primary-button>
                                    {{ __('Keluar') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 xl:w-1/2">
                    <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("Presensi") }}
                        </div>
                        @if ($presence && $presence->date === now()->timezone('Asia/Jakarta')->format('Y-m-d'))
                            <x-input-label>MASUK : {{ $absensi_in }}</x-input-label>
                            <x-input-label>KELUAR : {{ $absensi_out }}</x-input-label>
                        @else
                            <x-input-label>MASUK : -</x-input-label>
                            <x-input-label>KELUAR : -</x-input-label>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

            function updateTime() {
                const timeInput = document.getElementById('out');
                const now = new Date();
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');
                const currentTime = `${hours}:${minutes}`;

                timeInput.value = currentTime;
            }

            setInterval(updateTime, 1000);
            updateTime();
        
    </script>
</x-app-layout>
