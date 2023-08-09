<x-app-layout>
    @section('title', 'AddDataVendor | Pilar')
    <!-- component -->
    <form class="flex h-screen bg-gray-100 rounded-md p-2px" action="/1dashboard" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="m-auto">
            <div>
                <div class="mt-2 bg-white rounded-lg shadow">
                    <div class="flex">
                        <div class="flex-1 py-5 pl-5 overflow-hidden">
                            <h1 class="inline text-2xl font-semibold leading-none">Lengkapi Biodata Vendor</h1>
                        </div>
                    </div>
                    <div class="px-5 pb-2">

                        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Kamu tertarik menjadi Mitra Vendor
                            apa nih?</h3>
                        <div class="form-group">
                            <label><strong>Kami mungkin memerlukan beberapa data kamu.</strong></label><br>
                            <label><strong>Kamu tertarik menjadi Mitra Vendor apa nih?</strong></label><br>
                            <label><input type="checkbox" name="minat[]" id="myCheck" value="Packing"
                                    onclick="myFunction()"> Packing</label><br>
                            <label><input type="checkbox" name="minat[]" id="myCheck1" value="Survey"
                                    onclick="myFunction1()"> Survey</label><br>
                            <label><input type="checkbox" name="minat[]" id="myCheck2" value="TKBM"
                                    onclick="myFunction2()"> TKBM</label><br>
                            <label><input type="checkbox" name="minat[]" id="myCheck3" value="Truck"
                                    onclick="myFunction3()"> Penyedia Truck</label><br>
                            <label><input type="checkbox" name="minat[]" id="gudang" value="Gudang Transit"> Gudang
                                Transit</label><br>
                            <label><input type="checkbox" name="minat[]" id="myCheck4" value="Kurir"
                                    onclick="myFunction4()"> Kurir</label>
                        </div>
                        <i class="text-bold text-red-600">*Ceklis salah satu atau beberapa minat kamu ya sebelum
                            mengisi data diri</i>
                        <br>
                        <br>
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                <select placeholder="Validator" type="text" id="validator" name="validator"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">Validator</option>
                                    <option value="Komunitas">Komunitas</option>
                                    <option value="Teman">Teman</option>
                                    <option value="Internet">Internet</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                <input placeholder="Nama Validator" type="text" id="nama_validator"
                                    name="nama_validator"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-1">
                                <input placeholder="WA Validator" type="text" id="wa_validator" name="wa_validator"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <input placeholder="Nama Vendor" type="text" id="nama_vendor" name="nama_vendor"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div>
                                <input placeholder="WA Vendor" type="text" id="wa_vendor" name="telepon"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div>
                                <input placeholder="Nama Driver" type="text" id="nama_driver" name="nama_driver"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div>
                                <input placeholder="WA Driver" type="text" id="wa_driver" name="wa_driver"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                        </div>

                    </div>
                    <div class="px-5 pb-5">
                        <input placeholder="Alamat" name="alamat"
                            class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <input placeholder="Home Base" name="homebase"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div>
                                <input placeholder="Nomer Polisi" type="text" id="nopol" name="nopol"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            </div>
                            <div>
                                <select class="input" name="kota" id="kota" required
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>== Pilih Salah Satu ==</option>
                                    @foreach ($regencies as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select placeholder="Rute yang Dikuasai" name="covarage"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">Rute yang dikuasai </option>
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
                    </div>
                    <div class="row">
                        <div class="px-5 pb-5" id="kir">
                            <label class="mx-1" for="semail">Foto KIR</label>
                            <input type="file" id="kir" name="kir" class="form-control me-md-1 semail">
                            @error('kir')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="px-5 pb-5" id="ktp">
                            <label class="mx-1" for="semail">Foto KTP</label>
                            <input type="file" id="ktp" name="ktp" class="form-control me-md-1 semail">
                            @error('ktp')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="px-5 pb-5" id="sim">
                            <label class="mx-1" for="semail">Foto SIM</label>
                            <input type="file" id="sim" name="sim" class="form-control me-md-1 semail">
                            @error('sim')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="px-5 pb-5" id="stnk">
                            <label class="mx-1" for="semail">Foto STNK</label>
                            <input type="file" id="stnk" name="stnk" class="form-control me-md-1 semail">
                            @error('stnk')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="px-5 pb-5" id="armada1">
                            <label class="mx-1" for="semail">Foto Unit Armada Tampak Depan</label>
                            <input type="file" id="armada1" name="armada1" class="form-control me-md-1 semail">
                            @error('armada1')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="px-5 pb-5" id="armada2">
                            <label class="mx-1" for="semail">Foto Unit Armada Tampak Samping</label>
                            <input type="file" id="armada2" name="armada2" class="form-control me-md-1 semail">
                            @error('armada2')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="px-5 pb-5" id="armada3">
                            <label class="mx-1" for="semail">Foto Unit Armada Tampak Belakang</label>
                            <input type="file" id="armada3" name="armada3" class="form-control me-md-1 semail">
                            @error('armada3')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="flex items-center pt-3 px-5 pb-5">
                            <input type="checkbox"
                                class="w-4 h-4 text-black bg-gray-300 border-none rounded-md focus:ring-transparent"><label
                                for="safeAdress" class="block ml-2 text-sm text-gray-900">Saya tertarik menjadi
                                vendor</label>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="flex flex-row-reverse p-3">
                        <div class="flex-initial pl-3">
                            <button type="submit"
                                class="flex items-center
                                px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-black rounded-md
                                hover:bg-gray-800 focus:outline-none focus:bg-gray-900 transition duration-300 transform
                                active:scale-95 ease-in-out">
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
                                <span class="pl-2 mx-1">Save</span>
                            </button>
                        </div>
                        <div class="flex-initial">
                            <button type="submit" id="submit"
                                class="flex items-center px-5 py-2.5 font-medium tracking-wide text-black capitalize rounded-md  hover:bg-red-200 hover:fill-current hover:text-red-600  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                    width="24px">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M8 9h8v10H8z" opacity=".3"></path>
                                    <path
                                        d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z">
                                    </path>
                                </svg>
                                <span class="pl-2 mx-1">Delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
@push('script')
    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var nama_driver = document.getElementById("nama_driver");
            var sim = document.getElementById("sim");
            var kir = document.getElementById("kir");
            var stnk = document.getElementById("stnk");
            var armada1 = document.getElementById("armada1");
            var armada2 = document.getElementById("armada2");
            var armada3 = document.getElementById("armada3");
            var nopol = document.getElementById("nopol");
            var covarage = document.getElementById("covarage");
            if (checkBox.checked == true) {
                nama_driver.style.display = "none";
                sim.style.display = "none";
                kir.style.display = "none";
                stnk.style.display = "none";
                armada1.style.display = "none";
                armada2.style.display = "none";
                armada3.style.display = "none";
                nopol.style.display = "none";
                covarage.style.display = "none";
            } else {
                nama_driver.style.display = "block";
                sim.style.display = "block";
                kir.style.display = "block";
                stnk.style.display = "block";
                armada1.style.display = "block";
                armada2.style.display = "block";
                armada3.style.display = "block";
                nopol.style.display = "block";
                covarage.style.display = "block";
            }
        }

        function myFunction1() {
            var checkBox = document.getElementById("myCheck1");
            var nama_driver = document.getElementById("nama_driver");
            var sim = document.getElementById("sim");
            var kir = document.getElementById("kir");
            var stnk = document.getElementById("stnk");
            var armada1 = document.getElementById("armada1");
            var armada2 = document.getElementById("armada2");
            var armada3 = document.getElementById("armada3");
            var nopol = document.getElementById("nopol");
            var covarage = document.getElementById("covarage");
            if (checkBox.checked == true) {
                nama_driver.style.display = "none";
                sim.style.display = "none";
                kir.style.display = "none";
                stnk.style.display = "none";
                armada1.style.display = "none";
                armada2.style.display = "none";
                armada3.style.display = "none";
                nopol.style.display = "none";
                covarage.style.display = "none";
            } else {
                nama_driver.style.display = "block";
                sim.style.display = "block";
                kir.style.display = "block";
                stnk.style.display = "block";
                armada1.style.display = "block";
                armada2.style.display = "block";
                armada3.style.display = "block";
                nopol.style.display = "block";
                covarage.style.display = "block";
            }
        }

        function myFunction2() {
            var checkBox = document.getElementById("myCheck2");
            var nama_driver = document.getElementById("nama_driver");
            var sim = document.getElementById("sim");
            var kir = document.getElementById("kir");
            var stnk = document.getElementById("stnk");
            var armada1 = document.getElementById("armada1");
            var armada2 = document.getElementById("armada2");
            var armada3 = document.getElementById("armada3");
            var nopol = document.getElementById("nopol");
            var covarage = document.getElementById("covarage");
            if (checkBox.checked == true) {
                nama_driver.style.display = "none";
                sim.style.display = "none";
                kir.style.display = "none";
                stnk.style.display = "none";
                armada1.style.display = "none";
                armada2.style.display = "none";
                armada3.style.display = "none";
                nopol.style.display = "none";
                covarage.style.display = "none";
            } else {
                nama_driver.style.display = "block";
                sim.style.display = "block";
                kir.style.display = "block";
                stnk.style.display = "block";
                armada1.style.display = "block";
                armada2.style.display = "block";
                armada3.style.display = "block";
                nopol.style.display = "block";
                covarage.style.display = "block";
            }
        }

        function myFunction3() {
            var checkBox = document.getElementById("myCheck3");
            var nama_driver = document.getElementById("nama_driver");
            var sim = document.getElementById("sim");
            var kir = document.getElementById("kir");
            var stnk = document.getElementById("stnk");
            var armada1 = document.getElementById("armada1");
            var armada2 = document.getElementById("armada2");
            var armada3 = document.getElementById("armada3");
            var nopol = document.getElementById("nopol");
            var covarage = document.getElementById("covarage");
            if (checkBox.checked == true) {
                nama_driver.style.display = "block";
                sim.style.display = "block";
                kir.style.display = "block";
                stnk.style.display = "block";
                armada1.style.display = "block";
                armada2.style.display = "block";
                armada3.style.display = "block";
                nopol.style.display = "block";
                covarage.style.display = "block";
            } else {
                nama_driver.style.display = "none";
                sim.style.display = "none";
                kir.style.display = "none";
                stnk.style.display = "none";
                armada1.style.display = "none";
                armada2.style.display = "none";
                armada3.style.display = "none";
                nopol.style.display = "none";
                covarage.style.display = "none";
            }
        }

        function myFunction4() {
            var checkBox = document.getElementById("myCheck4");
            var nama_driver = document.getElementById("nama_driver");
            var sim = document.getElementById("sim");
            var kir = document.getElementById("kir");
            var stnk = document.getElementById("stnk");
            var armada1 = document.getElementById("armada1");
            var armada2 = document.getElementById("armada2");
            var armada3 = document.getElementById("armada3");
            var nopol = document.getElementById("nopol");
            var covarage = document.getElementById("covarage");
            if (checkBox.checked == true) {
                nama_driver.style.display = "none";
                sim.style.display = "none";
                kir.style.display = "none";
                stnk.style.display = "none";
                armada1.style.display = "none";
                armada2.style.display = "none";
                armada3.style.display = "none";
                nopol.style.display = "none";
                covarage.style.display = "none";
            } else {
                nama_driver.style.display = "block";
                sim.style.display = "block";
                kir.style.display = "block";
                stnk.style.display = "block";
                armada1.style.display = "block";
                armada2.style.display = "block";
                armada3.style.display = "block";
                nopol.style.display = "block";
                covarage.style.display = "block";
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
