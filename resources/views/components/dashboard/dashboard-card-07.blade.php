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
                            <div class="font-semibold text-center">Home Base</div>
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
                {{-- <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    <!-- Row -->
                    <tr>
                        <td class="p-2">
                            1.
                        </td>
                        <td class="p-2">
                            <div class="text-left">Ujang</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center">Udin</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-emerald-500">089522224418</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">Kontol</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">Kontol</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">Kontol</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">Kontol</div>
                        </td>
                    </tr>
                </tbody> --}}
                <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    @if (isset($vendors))
                        @foreach ($vendors as $vendor)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                {{-- <td style="padding: 2px;">
                                    <p>{{ \Carbon\Carbon::parse($vendor->created_at)->format('Y-m-d') }}</p>
                                </td> --}}
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->nama_vendor }}</p>
                                </td>
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->nama_driver }}</p>
                                </td>
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->telepon }}</p>
                                </td>
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->kota }}</p>
                                </td>
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->nopol }}</p>
                                </td>
                                <td style="padding: 6px;">
                                    <p>{{ $vendor->covarage }}</p>
                                </td>
                                <td style="padding: 15px;">
                                    <p>sc1</p>
                                </td>
                                {{-- <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Details
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/ktpvendor/{{ $vendor->ktp }}">KTP</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/sim/{{ $vendor->sim }}">SIM</a></li>
                                            <li><a class="dropdown-item" href="/kir/{{ $vendor->kir }}">KIR</a></li>
                                            <li><a class="dropdown-item" href="/stnk/{{ $vendor->stnk }}">STNK</a></li>
                                            <li><a class="dropdown-item"
                                                    href="/armadadepan/{{ $vendor->armada1 }}">UNIT
                                                    DEPAN</a></li>
                                            <li><a class="dropdown-item"
                                                    href="/armadabelakang/{{ $vendor->armada3 }}">UNIT
                                                    BELAKANG</a></li>
                                            <li><a class=" dropdown-item"
                                                    href="/armadabelakang/{{ $vendor->armada2 }}">UNIT SAMPING</a></li>
                                        </ul>
                                    </div>
                                </td> --}}
                                <td style="padding: 6px;">
                                    <a class="btn btn-danger" href="/editvendor/{{ $vendor->id }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
