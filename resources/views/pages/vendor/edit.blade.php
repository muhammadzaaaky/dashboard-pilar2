<x-app-layout>
    <!-- component -->
    @csrf
    @if ($vendors)
        <form class="flex h-screen bg-gray-100 rounded-md p-2px" action="/update/{{ $vendors->id }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="m-auto">
                <div>
                    <div class="mt-2 bg-white rounded-lg shadow">
                        <div class="flex">
                            <div class="flex-1 py-5 pl-5 overflow-hidden">
                                <h1 class="inline text-2xl font-semibold leading-none">Edit Biodata Vendor</h1>
                            </div>
                        </div>
                        <div class="px-5 pb-2">
                            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Kamu tertarik menjadi Mitra
                                Vendor
                                apa nih?</h3>
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="vue-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox-list"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Packing</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="react-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="react-checkbox-list"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">TKBM</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="angular-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="angular-checkbox-list"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">penyedia
                                            Truk</label>
                                    </div>
                                </li>
                                <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="laravel-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="laravel-checkbox-list"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kurir</label>
                                    </div>
                                </li>
                            </ul>
                            <i class="text-bold text-red-600">*Ceklis salah satu atau beberapa minat kamu ya sebelum
                                mengisi data diri</i>
                            <br>
                            <br>
                            <div class="flex flex-wrap">
                                <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                    <input placeholder="Validator" type="text" id="validator" name="validator"
                                        value="{{ $vendors->validator }}"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                                <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                    <input placeholder="Nama Validator" type="text" id="nama_validator"
                                        name="nama_validator" value="{{ $vendors->nama_validator }}"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                                <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                    <input placeholder="WA Validator" type="text" id="wa_validator"
                                        name="wa_validator" value="{{ $vendors->wa_validator }}"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                                <div>
                                    <input placeholder="Nama Vendor" type="text" id="nama_vendor" name="nama_vendor"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                        value="{{ $vendors->nama_vendor }}">
                                </div>
                                <div>
                                    <input placeholder="WA Vendor" type="text" id="wa_vendor" name="wa_vendor"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                        value="{{ $vendors->telepon }}">
                                </div>
                                <div>
                                    <input placeholder="Nama Driver" type="text" id="nama_driver" name="nama_driver"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                        value="{{ $vendors->nama_driver }}">
                                </div>
                                <div>
                                    <input placeholder="WA Driver" type="text" id="wa_driver" name="wa_driver"
                                        value="{{ $vendors->wa_driver }}"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                            </div>

                        </div>
                        <div class="px-5 pb-5">
                            <input placeholder="Alamat"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                value="{{ $vendors->alamat }}">
                            <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                                <div>
                                    <input placeholder="Home Base" value="{{ $vendors->homebase }}"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                                <div>
                                    <input placeholder="Nomer Polisi" type="text" id="nopol" name="nopol"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                        value="{{ $vendors->nopol }}">
                                </div>
                                <div>
                                    <select placeholder="Area Kamu"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                        @foreach ($regencies as $item)
                                            <option value="{{ $vendors->kota }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <select placeholder="Rute yang Dikuasai"
                                        class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                        <option value="">{{ $vendors->covarage }}</option>
                                        <option value="JAWA-BALI"> JAWA - BALI </option>
                                        <option value="JATENG"> JATENG AREA </option>
                                        <option value="JATIM"> JATIM AREA </option>
                                        <option value="JABAR"> JABAR AREA </option>
                                        <option value="YOGYAKARTA"> DIY AREA </option>
                                        <option value="JABODETABEK"> JABODETABEK AREA</option>
                                        <option value="JABODETABEK-JATENG"> JABODETABEK - JATENG</option>
                                        <option value="JABODETABEK-JATIM"> JABODETABEK - JATIM</option>
                                        <option value="JABODETABEK-JABAR"> JABODETABEK - JABAR</option>
                                        <option value="JABODETABEK-JABAR"> JABODETABEK - JABAR</option>
                                        <option value="JAWA - KALIMANTAN"> JAWA - KALIMANTAN </option>
                                        <option value="KALIMANTAN">KALIMANTAN AREA </option>
                                        <option value="SUMATERA">SUMATERA AREA </option>
                                        <option value="SULAWESI">SULAWESI AREA </option>
                                        <option value="ACEH">ACEH AREA </option>
                                        <option value="NTB">NTB AREA </option>
                                        <option value="NTT">NTT AREA </option>
                                        <option value="PAPUA IRIAN">PAPUA IRIAN </option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex items-center pt-3">
                                <input type="checkbox"
                                    class="w-4 h-4 text-black bg-gray-300 border-none rounded-md focus:ring-transparent"><label
                                    for="safeAdress" class="block ml-2 text-sm text-gray-900">Save as default
                                    address</label>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="flex flex-row-reverse p-3">
                            <div class="flex-initial pl-3">
                                <button type="submit" id="button"
                                    class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#FFFFFF">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z"
                                            opacity=".3"></path>
                                        <path
                                            d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z">
                                        </path>
                                    </svg>
                                    <span class="pl-2 mx-1">Update</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</x-app-layout>
