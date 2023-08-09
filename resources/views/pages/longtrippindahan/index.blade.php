<x-app-layout>
    @section('title', 'LongTripPindahan | Pilar')
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        @if (session('success'))
            <div class="bg-transparent text-center py-4 lg:px-4">
                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                    </svg>
                </div>
            </div>
        @endif
        @if (session('update'))
            <div class="bg-transparent text-center py-4 lg:px-4">
                <div class="p-2 bg-green-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('update') }}</span>
                </div>
            </div>
        @endif
        @if (session('delete'))
            <div class="bg-transparent text-center py-4 lg:px-4">
                <div class="p-2 bg-red-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('delete') }}</span>
                </div>
            </div>
        @endif
        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-end lg:justify-end sm:justify-end gap-2">

                <!-- Add view button -->
                <a href="/create-harga-pindahanlongtrip" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Tambah Harga</span>
                </a>
                <a href="/download-pindahanshorttrip" class="btn bg-green-500 hover:bg-green-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 250, 250, 1);transform: ;msFilter:;">
                        <path
                            d="M18.948 11.112C18.511 7.67 15.563 5 12.004 5c-2.756 0-5.15 1.611-6.243 4.15-2.148.642-3.757 2.67-3.757 4.85 0 2.757 2.243 5 5 5h1v-2h-1c-1.654 0-3-1.346-3-3 0-1.404 1.199-2.757 2.673-3.016l.581-.102.192-.558C8.153 8.273 9.898 7 12.004 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-2v2h2c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888z">
                        </path>
                        <path d="M13.004 14v-4h-2v4h-3l4 5 4-5z"></path>
                    </svg>
                    {{-- <span class="hidden xs:block ml-2">Daftar Vendor</span> --}}
                    <button type="submit" class="hidden xs:block ml-2">Download CSV</button>
                </a>
                <dif class="btn bg-orange-500 hover:bg-orange-600 text-white"">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M13 19v-4h3l-4-5-4 5h3v4z"></path>
                        <path
                            d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3 0-1.404 1.199-2.756 2.673-3.015l.581-.102.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.611 5.757 9.15 3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z">
                        </path>
                    </svg>
                    {{-- <span class="hidden xs:block ml-2">Daftar Vendor</span> --}}
                    <button onclick="showModal()" class="text-white font-bold rounded">Upload CSV</button>
                </dif>
            </div>
        </div>
        <!--Modal-->
        <div id="uploadModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            <div class="modal-container bg-white w-1/2 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6 justify-end">
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Unggah File</p>
                    </div>
                    <form id="uploadForm" action="/import-pindahanshorttrip" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="py-2 px-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Upload File
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div
                class="col-span-full xl:col-span-15 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">List Pindahan Longtrip Harga</h2>
                    <div class="mx-2">
                        <form action="{{ url('/search/result') }}" method="GET">
                            <label for="origin_kabupaten">Origin Kabupaten:</label>
                            <select name="origin_kabupaten" id="origin_kabupaten">
                                @foreach ($originKabupatens as $originKabupaten)
                                    <option value="{{ $originKabupaten }}">
                                        {{ $originKabupaten }}</option>
                                @endforeach
                            </select>

                            <label for="destinasi_kabupaten">Destinasi Kabupaten:</label>
                            <select name="destinasi_kabupaten" id="destinasi_kabupaten">
                                @foreach ($destinasiKabupatens as $destinasiKabupaten)
                                    <option value="{{ $destinasiKabupaten }}">
                                        {{ $destinasiKabupaten }}</option>
                                @endforeach
                            </select>

                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
                                type="submit">Search</button>
                        </form>
                    </div>
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
                                        <div class="font-semibold text-left">Origin Kabupaten</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Origin Kecamatan</div>
                                    </th>
                                    <th class="p-2 m-2">
                                        <div class="font-semibold text-left">Destinasi Kabupaten</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Destinasi Kecamatan</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Armada</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Harga</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Action</div>
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
                                                {{ $harga->origin_kabupaten }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->origin_kecamatan }}
                                            </p>
                                        </td>
                                        <td class="p-2 m-2">
                                            <p class="text-left">
                                                {{ $harga->destinasi_kabupaten }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-center">
                                                {{ $harga->destinasi_kecamatan }}
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-left">
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
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    <a href="/edit-pindahanlongtrip/{{ $harga->id }}">Edit</a>
                                                </button>
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    <a href="/delete-pindahanlongtrip/{{ $harga->id }}">Delete</a>
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
    <script>
        function showModal() {
            var modal = document.getElementById('uploadModal');
            modal.classList.remove('hidden');
        }

        function hideModal() {
            var modal = document.getElementById('uploadModal');
            modal.classList.add('hidden');
        }
    </script>
</x-app-layout>
