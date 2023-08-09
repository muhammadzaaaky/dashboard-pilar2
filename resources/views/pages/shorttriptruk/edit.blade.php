<x-app-layout>
    <!-- component -->
    <form class="flex h-screen bg-gray-100 rounded-md p-2px" action="/update-shorttriptruk/{{ $hargas->id }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        <div class="m-auto">
            <div>
                <div class="mt-2 bg-white rounded-lg shadow">
                    <div class="flex">
                        <div class="flex-1 py-5 pl-5 overflow-hidden">
                            <h1 class="inline text-2xl font-semibold leading-none">Edit Harga Baru Sewa Truk Shorttrip
                            </h1>
                        </div>
                    </div>
                    <div class="px-5 pb-2">
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <select placeholder="Origin Provinsi" type="text" id="origin_provinsi"
                                    name="origin_provinsi"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="">{{ $hargas->origin_provinsi }}
                                    </option>
                                    @foreach ($provinces as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Provinsi" type="text" id="destinasi_provinsi"
                                    name="destinasi_provinsi"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="{{ $hargas->destinasi_provinsi }}">{{ $hargas->destinasi_provinsi }}
                                    </option>
                                    @foreach ($provinces as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kabupaten" type="text" id="origin_kabupaten"
                                    name="origin_kabupaten"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kabupaten }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kabupaten" type="text" id="destinasi_kabupaten"
                                    name="destinasi_kabupaten"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kabupaten }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kecamatan" type="text" id="origin_kecamatan"
                                    name="origin_kecamatan"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kecamatan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kecamatan" type="text" id="destinasi_kecamatan"
                                    name="destinasi_kecamatan"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kecamatan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Origin Kelurahan" type="text" id="origin_kelurahan"
                                    name="origin_kelurahan"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->origin_kelurahan }}</option>
                                </select>
                            </div>
                            <div>
                                <select placeholder="Destinasi Kelurahan" type="text" id="destinasi_kelurahan"
                                    name="destinasi_kelurahan"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-1 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option>{{ $hargas->destinasi_kelurahan }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-1">
                        <input placeholder="Jarak Yang di tempuh - /Km" type="text" id="jarak" name="jarak"
                            class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                            value="{{ $hargas->jarak }}">
                    </div>
                    <div class="px-5 pb-5">
                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-2">
                            <div>
                                <select placeholder="Jenis Armada" name="armada"
                                    class="text-black placeholder-gray-600 w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                    <option value="{{ $hargas->armada }}">{{ $hargas->armada }}</option>
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
                                <input placeholder="Harga" type="text" id="harga" name="harga"
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#origin_provinsi').on('change', function() {
                var idProvinsi = $(this).val();
                if (idProvinsi) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kabupaten') }}",
                        data: {
                            id_provinsi: idProvinsi
                        },
                        success: function(response) {
                            $('#origin_kabupaten').empty();
                            $('#origin_kecamatan').empty();
                            $('#origin_kelurahan').empty();

                            $('#origin_kabupaten').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#origin_kecamatan').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#origin_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#origin_kabupaten').append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#origin_kabupaten').empty();
                    $('#origin_kecamatan').empty();
                    $('#origin_kelurahan').empty();

                    $('#origin_kabupaten').append('<option>== Pilih Kabupaten ==</option>');
                    $('#origin_kecamatan').append('<option>== Pilih Kecamatan ==</option>');
                    $('#origin_kelurahan').append('<option>== Pilih Kelurahan ==</option>');
                }
            });

            $('#origin_kabupaten').on('change', function() {
                var idKabupaten = $(this).val();
                if (idKabupaten) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kecamatan') }}",
                        data: {
                            id_kabupaten: idKabupaten,
                        },
                        success: function(response) {
                            $('#origin_kecamatan').empty();
                            $('#origin_kelurahan').empty();

                            $('#origin_kecamatan').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#origin_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#origin_kecamatan').append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#origin_kecamatan').empty();
                    $('#origin_kelurahan').empty();
                    $('#origin_kecamatan').append('<option>== Pilih Salah Satu ==</option>');
                    $('#origin_kelurahan').append('<option>== Pilih Salah Satu ==</option>');
                }
            });

            $('#origin_kecamatan').on('change', function() {
                var idKecamatan = $(this).val();
                if (idKecamatan) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kelurahan') }}",
                        data: {
                            id_kecamatan: idKecamatan // Corrected variable name from idKelurahan to id_kecamatan
                        },
                        success: function(response) {
                            $('#origin_kelurahan').empty();
                            $('#origin_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#origin_kelurahan').append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#origin_kelurahan').empty();
                    $('#origin_kelurahan').append('<option>== Pilih Salah Satu ==</option>');
                }
            });


            $('#destinasi_provinsi').on('change', function() {
                var idProvinsi = $(this).val();
                if (idProvinsi) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kabupaten') }}",
                        data: {
                            id_provinsi: idProvinsi
                        },
                        success: function(response) {
                            $('#destinasi_kabupaten').empty();
                            $('#destinasi_kecamatan').empty();
                            $('#destinasi_kelurahan').empty();

                            $('#destinasi_kabupaten').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#destinasi_kecamatan').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#destinasi_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#destinasi_kabupaten').append('<option value="' +
                                    value.id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#destinasi_kabupaten').empty();
                    $('#destinasi_kecamatan').empty();
                    $('#destinasi_kelurahan').empty();
                    $('#destinasi_kabupaten').append('<option>== Pilih Salah Satu ==</option>');
                    $('#destinasi_kecamatan').append('<option>== Pilih Salah Satu ==</option>');
                    $('#destinasi_kelurahan').append('<option>== Pilih Salah Satu ==</option>');
                }
            });

            $('#destinasi_kabupaten').on('change', function() {
                var idKabupaten = $(this).val();
                if (idKabupaten) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kecamatan') }}",
                        data: {
                            id_kabupaten: idKabupaten
                        },
                        success: function(response) {
                            $('#destinasi_kecamatan').empty();
                            $('#destinasi_kecamatan').append(
                                '<option>== Pilih Salah Satu ==</option>');
                            $('#destinasi_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#destinasi_kecamatan').append('<option value="' +
                                    value.id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#destinasi_kecamatan').empty();
                    $('#destinasi_kelurahan').empty();
                    $('#destinasi_kecamatan').append('<option>== Pilih Salah Satu ==</option>');
                    $('#destinasi_kelurahan').append('<option>== Pilih Salah Satu ==</option>');
                }
            });
            $('#destinasi_kecamatan').on('change', function() {
                var idKecamatan = $(this).val();
                if (idKecamatan) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('kelurahan') }}",
                        data: {
                            id_kecamatan: idKecamatan // Corrected variable name from idKelurahan to id_kecamatan
                        },
                        success: function(response) {
                            $('#destinasi_kelurahan').empty();
                            $('#destinasi_kelurahan').append(
                                '<option>== Pilih Salah Satu ==</option>');

                            $.each(response, function(key, value) {
                                $('#destinasi_kelurahan').append('<option value="' +
                                    value
                                    .id + '">' + value.name + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log('error:', data);
                        }
                    });
                } else {
                    $('#destinasi_kelurahan').empty();
                    $('#destinasi_kelurahan').append('<option>== Pilih Salah Satu ==</option>');
                }
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</x-app-layout>
