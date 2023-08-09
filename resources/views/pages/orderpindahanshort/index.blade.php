<x-app-layout>
    @section('title', 'OrderPindahanShorttrip | Pilar')
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div
                class="col-span-full xl:col-span-15 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">List Order Pindahan ShortTrip</h2>
                </header>
                <div class="p-3">

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full dark:text-slate-300">
                            <!-- Table header -->
                            <thead
                                class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
                                <tr>
                                    <th class="p-2">
                                        <div class="font-semibold text-left">No</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-left">Nama</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">WhatsApp</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Origin Kab-Kec</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-left">Destinasi Kab-Kac</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Rencana Kirim</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Armada</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Harga</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                                @foreach ($hargas as $harga)
                                    <tr>
                                        <td class="p-2">
                                            {{ $loop->iteration }}.
                                        </td>
                                        <td class="p-2">
                                            <p class="text-left">
                                                {{ $harga->nama }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->whatsapp }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->origin_kabupaten }} -
                                                {{ $harga->origin_kecamatan }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->destinasi_kabupaten }} -
                                                {{ $harga->destinasi_kecamatan }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->rencana_kirim }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->armada }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                Rp. {{ number_format($harga->harga, 0, ',', '.') }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-center">
                                                {{-- <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    <a href="/edit-vendor/{{ $harga->id }}">Edit</a>
                                                </button> --}}
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    <a href="/delete/{{ $harga->id }}">Delete</a>
                                                </button>
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
    </div>
</x-app-layout>
