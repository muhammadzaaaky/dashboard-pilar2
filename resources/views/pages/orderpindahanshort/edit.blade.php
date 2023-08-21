<x-app-layout>
    <!-- component -->
    <form class="flex h-screen bg-gray-100 rounded-md p-2px" action="/update-pindahanshort/{{ $hargas->id }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        <div class="m-auto">
            <div>
                <div class="mt-2 bg-white rounded-lg shadow">
                    <div class="flex">
                        <div class="flex-1 py-5 pl-5 overflow-hidden">
                            <h1 class="inline text-2xl font-semibold leading-none">Detail Order Sewa Truk Longtrip
                                {{ $hargas->nama }}
                            </h1>
                        </div>
                    </div>
                    <div class="px-5 pb-2">
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <input placeholder="Nama Customer" type="text" id="nama" name="nama"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->nama }}" />

                            </div>
                            <div>
                                <input placeholder="Wa Customer" type="text" id="whatsapp" name="whatsapp"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->whatsapp }}" />
                            </div>
                            <div>
                                <input placeholder="Email Customer" type="text" id="email" name="email"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->email }}" />
                            </div>
                            <div>
                                <input placeholder="Tanggal Pengiriman" type="date" id="rencana_kirim"
                                    name="rencana_kirim"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->rencana_kirim }}" />
                            </div>
                        </div>
                        <div class="py-1">
                            <select placeholder="Status Orderan" type="text" id="status" name="status"
                                class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                <option value="">{{ $hargas->status }}</option>
                                <option class="text-orange-500" value="keranjang">keranjang</option>
                                <option class="text-yellow-500" value="konfirmasi">konfirmasi</option>
                                <option class="text-blue-500" value="selesai">selesai</option>
                                <option class="text-green-500" value="proses">proses</option>
                                <option class="text-red-500" value="cancel">cancel</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <select placeholder="Origin Provinsi" type="text" id="origin_provinsi"
                                    name="origin_provinsi" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">{{ $hargas->origin_provinsi }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Provinsi" type="text" id="destinasi_provinsi"
                                    name="destinasi_provinsi" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">{{ $hargas->destinasi_provinsi }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kabupaten" type="text" id="origin_kabupaten"
                                    name="origin_kabupaten" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kabupaten }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kabupaten" type="text" id="destinasi_kabupaten"
                                    name="destinasi_kabupaten" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kabupaten }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kecamatan" type="text" id="origin_kecamatan"
                                    name="origin_kecamatan" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kecamatan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kecamatan" type="text" id="destinasi_kecamatan"
                                    name="destinasi_kecamatan" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kecamatan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kecamatan" type="text" id="origin_kelurahan"
                                    name="origin_kelurahan" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kelurahan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kecamatan" type="text" id="destinasi_kelurahan"
                                    name="destinasi_kelurahan" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kelurahan }}</option>
                                </select>
                            </div>
                            <div>
                                <input placeholder="Helper" type="text" id="tkbm" name="tkbm" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->tkbm }}" />
                            </div>
                            <div>
                                <input placeholder="Jarak yang ditempuh" type="text" id="jarak"
                                    name="jarak" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->jarak }} /Km" />
                            </div>
                        </div>

                    </div>
                    <div class="px-5 pb-5">
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <select placeholder="Jenis Armada" name="armada"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">{{ $hargas->armada }}</option>
                                    <option value="pickup">PICKUP</option>
                                    <option value="L300">L300</option>
                                    <option value="CDE Bak">CDE BAK</option>
                                    <option value="CDE Box">CDE BOX</option>
                                    <option value="CDD Bak">CDD BAK</option>
                                    <option value="CDD Box">CDD BOX</option>
                                    <option value="CDD Long Box">CDD LONG BOX</option>
                                    <option value="Fuso Bak">FUSO BAK</option>
                                    <option value="Fuso Box">FUSO BOX</option>
                                    <option value="tronton bak/3away">TRONTON BAK</option>
                                    <option value="tronton wing box/build up">TRONTON WINGBOX</option>
                                </select>
                            </div>
                            <div>
                                <input placeholder="Harga" type="text" id="harga" name="harga" disabled
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                    value="{{ $hargas->harga }}">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="flex flex-row-reverse p-3">
                        <div class="flex-initial pl-3">
                            <button type="submit"
                                class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
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
</x-app-layout>
