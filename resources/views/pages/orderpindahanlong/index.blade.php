<x-app-layout>
    @section('title', 'OrderPindahanLongtrip | Pilar')
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div
                class="col-span-full xl:col-span-15 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">Order Pidahan Long Trip</h2>
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
                                        <div class="font-semibold text-center">Origin Kabupaten</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-left">Destinasi Kabupaten</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Armada</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Status</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Rencana Kirim</div>
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
                                                {{ $harga->origin_kabupaten }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-left">
                                                {{ $harga->destinasi_kabupaten }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->armada }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <a href="/edit-pindahanlong/{{ $harga->id }}"
                                                class="flex items-center font-bold
                                                    @if ($harga->status === 'konfirmasi') text-yellow-500
                                                    @elseif ($harga->status === 'proses') text-green-500
                                                    @elseif ($harga->status === 'cancel') text-red-500
                                                    @elseif ($harga->status === 'keranjang') text-orange-600
                                                    @elseif ($harga->status === 'selesai') text-blue-500 @endif">
                                                {{ $harga->status }}

                                                @if ($harga->status === 'selesai')
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgba(6, 15, 243, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                        </path>
                                                    </svg>
                                                @elseif ($harga->status === 'cancel')
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgba(243, 6, 10, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                                        </path>
                                                    </svg>
                                                @elseif ($harga->status === 'proses')
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgba(6, 243, 47, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="M2 11h5v2H2zm15 0h5v2h-5zm-6 6h2v5h-2zm0-15h2v5h-2zM4.222 5.636l1.414-1.414 3.536 3.536-1.414 1.414zm15.556 12.728-1.414 1.414-3.536-3.536 1.414-1.414zm-12.02-3.536 1.414 1.414-3.536 3.536-1.414-1.414zm7.07-7.071 3.536-3.535 1.414 1.415-3.536 3.535z">
                                                        </path>
                                                    </svg>
                                                @elseif ($harga->status === 'keranjang')
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgba(243, 150, 6, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                                        </path>
                                                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                                    </svg>
                                                @elseif ($harga->status === 'konfirmasi')
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgba(212, 187, 22, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                        <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z">
                                                        </path>
                                                    </svg>
                                                @endif
                                            </a>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->rencana_kirim ? \Carbon\Carbon::parse($harga->rencana_kirim)->format('d-m-Y') : '' }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                Rp. {{ number_format($harga->harga, 0, ',', '.') }}
                                            </p>
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
