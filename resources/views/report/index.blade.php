<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between pt-3 pb-2 mb-3 border-b">
            <x-input-label class="text-2xl font-semibold">Laporan - {{ date('F Y')}}</x-input-label>
            <div class="flex items-center">
                <x-primary-button class="px-4 py-2 text-white bg-gray-800 rounded-md hover:bg-gray-700"
                        onclick="printReport()">
                    <i class="mr-1 fas fa-file-download"></i> Cetak Laporan
                </x-primary-button>
            </div>
        </div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </x-slot>

    @if (auth()->user()->is_admin == true)
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <table class="min-w-full bg-white divide-y divide-gray-200 shadow-md dark:bg-gray-800 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                ID</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                NAMA</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                TANGGAL</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                JAM MASUK</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                STATUS</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($presences as $presence)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->date }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->in }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->status }}</td>
                                <td class="flex items-center">
                                    <div class="flex -mb-14">
                                        <x-button-with-icon href="{{ route('presensi.show', $presence->id) }}"/>
                                        <x-delete-button :action="route('presensi.destroy', $presence->id)"/>
                                    </div>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <table class="min-w-full bg-white divide-y divide-gray-200 shadow-md dark:bg-gray-800 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    ID</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    NAMA</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    DIVISI</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    TANGGAL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    MASUK</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    KELUAR</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($presence_by_name as $presence)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">
                                        @if ($presence->division)
                                            {{ $presence->division->name }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->date }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->in }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->out }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-200">{{ $presence->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    <script>
        function printReport() {
            var date = new Date();
            var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var currentMonth = monthNames[date.getMonth()];

            var companyName = '<div class="text-xl font-bold">TIM SAR PWF</div>';
            var separator = '<hr class="clear-both border-2 border-black" />';
            var title = '<div class="text-xl font-bold text-right">Laporan ' + currentMonth + '</div>';

            var printContents = companyName + title + separator + document.querySelector('table').outerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</x-app-layout>
