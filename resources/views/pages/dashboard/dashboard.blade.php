<x-app-layout>
    @section('title', 'Vendor | Pilar')
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
        @if (session('delete'))
            <div class="bg-transparent text-center py-4 lg:px-4">
                <div class="p-2 bg-red-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('delete') }}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                    </svg>
                </div>
            </div>
        @endif

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Avatars -->
            {{-- <x-dashboard.dashboard-avatars /> --}}

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-end lg:justify-end sm:justify-end gap-2">

                <!-- Filter button -->
                {{-- <x-dropdown-filtzer align="right" /> --}}

                <!-- Datepicker built with flatpickr -->
                {{-- <x-datepicker /> --}}

                <!-- Add view button -->
                <a href="/create-vendor" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 250, 250, 1);transform: ;msFilter:;">
                        <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
                    </svg>
                    <span class="hidden xs:block ml-2">Daftar Vendor</span>
                </a>
                <a href="/download-vendor" class="btn bg-green-500 hover:bg-green-600 text-white">
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
        <!-- Modal -->
        <div id="uploadModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            <div class="modal-container bg-white w-1/2 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6 justify-end">
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Unggah File</p>
                    </div>
                    <form id="uploadForm" action="/import-vendor" method="POST" enctype="multipart/form-data">
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
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">List Member Vendor</h2>
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
                                        <div class="font-semibold text-left">Vendor</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Nama Driver</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Telepon</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Nopol</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Status</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Detail</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-center">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                                <!-- Row -->
                                @if (isset($vendors))
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <td class="p-2">
                                                {{ $loop->iteration }}.
                                            </td>
                                            <td class="p-2">
                                                <div class="text-left">{{ $vendor->nama_vendor }}</div>
                                            </td>
                                            <td class="p-2">
                                                <div class="text-center">{{ $vendor->nama_driver }}</div>
                                            </td>
                                            <td class="p-2">
                                                <div class="text-center text-emerald-500">{{ $vendor->telepon }}</div>
                                            </td>
                                            <td class="p-2">
                                                <div class="text-center text-sky-500">{{ $vendor->nopol }}</div>
                                            </td>
                                            <td class="p-2">
                                                <div class="text-center text-sky-500">Psc1</div>
                                            </td>
                                            <td class="p-2">
                                                <div class="text-center">
                                                    <div class="relative inline-flex" x-data="{ open: false }">
                                                        <button
                                                            class="flex items-center px-5 py-2.5 font-medium tracking-wide text-black capitalize rounded-md  hover:bg-teal-200 hover:fill-current hover:text-teal-600  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out"
                                                            aria-haspopup="true" @click.prevent="open = !open"
                                                            :aria-expanded="open">

                                                            <div class="flex items-center truncate">
                                                                <span
                                                                    class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:text-slate-800 dark:group-hover:text-slate-200">Details</span>
                                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                                    viewBox="0 0 12 12">
                                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div class="origin-top-right z-10 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1
                                                            @click.outside="open=false"
                                                            @keydown.escape.window="open = false" x-show="open"
                                                            x-transition:enter="transition ease-out duration-200 transform"
                                                            x-transition:enter-start="opacity-0 -translate-y-2"
                                                            x-transition:enter-end="opacity-100 translate-y-0"
                                                            x-transition:leave="transition ease-out duration-200"
                                                            x-transition:leave-start="opacity-100"
                                                            x-transition:leave-end="opacity-0" x-cloak>
                                                            <ul>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/ktpvendor/{{ $vendor->ktp }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">KTP</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/sim/{{ $vendor->sim }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">SIM</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/kir/{{ $vendor->kir }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">KIR</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/stnk/{{ $vendor->stnk }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">STNK</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/armadadepan/{{ $vendor->armada1 }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">UNIT DEPAN</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/armadabelakang/{{ $vendor->armada2 }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">UNIT SAMPING</a>
                                                                </li>
                                                                <div
                                                                    class="pt-0.5 pb-1 px-1 mb-0 border-b border-slate-200 dark:border-slate-700">
                                                                </div>
                                                                <li>
                                                                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-0.5 px-3"
                                                                        href="/armadabelakang/{{ $vendor->armada3 }}"
                                                                        @click="open = false" @focus="open = true"
                                                                        @focusout="open = false">UNIT BELAKANG</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <div class="text-center">
                                                    <button
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        <a href="/edit-vendor/{{ $vendor->id }}">Edit</a>
                                                    </button>
                                                    <button
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        <a href="/delete/{{ $vendor->id }}">Delete</a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
