<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail Presensi') }}
        </h2>
    </x-slot>

    @if (session()->has('success'))
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-md mx-auto">
                <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <h5 class="mb-4 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            <i class="fas fa-circle-info"></i> Detail Presensi
                        </h5>

                        <div class="text-gray-700 dark:text-gray-300">
                            <x-input-label><b>Nama :</b>{{ $presence->name }}</x-input-label>
                            @if ($presence->division)
                                <x-input-label><b>Divisi :</b> {{ $presence->division->title }}</x-input-label>
                            @endif
                            <x-input-label><b>Tanggal :</b>{{ $presence->date }}</x-input-label>
                            <x-input-label><b>Jam Masuk :</b>{{ $presence->in }}</x-input-label>
                            <x-input-label><b>Jam Keluar :</b>{{ $presence->out }}</x-input-label>
                            <x-input-label><b>Status :</b>{{ $presence->status }}</x-input-label>
                            <x-input-label><b>Bukti :</b>
                                <x-image-button :imageSrc="asset('storage/' . $presence->image)">
                                    Lihat Bukti
                                </x-image-button>
                            </x-input-label>

                            <x-input-label><b>Alasan :</b>{{ $presence->reason }}</x-input-label>
                        </div>

                    </div>
                    <div class="pt-3">
                        <x-back-button href="/user/reports" >{{ __('Back') }}</x-back-button>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <h5 class="mb-4 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            <i class="fas fa-image"></i> Detail Bukti Sakit
                        </h5>
                        <div class="flex items-center justify-center">
                            <img id="proofImage" src="" alt="Bukti" style="display: none;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
        var badge = document.querySelector('.badge');
        var proofImage = document.getElementById('proofImage');

        if(badge && proofImage) {
            badge.addEventListener('click', function(event) {
            event.preventDefault();
            var imgSrc = this.getAttribute('data-image-src');

            if (imgSrc) {
                if (proofImage.style.display === 'none') {
                proofImage.src = imgSrc;
                proofImage.style.display = 'block';
                } else {
                proofImage.style.display = 'none';
                }
            } else {
                console.log('URL gambar tidak valid');
            }
            });
        } else {
            console.log('Elemen badge atau proofImage tidak ditemukan');
        }
        });
    </script>
</x-app-layout>
