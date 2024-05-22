@extends('layouts.layout')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg id="penduduk" xmlns="http://www.w3.org/2000/svg" height="3em" width="59px"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        #penduduk {
                                            fill: #f4be2a
                                        }
                                    </style>
                                    <path
                                        d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                </svg>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Jumlah Data Penduduk</div>
                            <div class="text-center fw-bold fs-1">{{ $totalpenduduk }} Orang</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg id="suratmasuk" xmlns="http://www.w3.org/2000/svg" height="3em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        #suratmasuk {
                                            fill: #00d66b
                                        }
                                    </style>
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Jumlah Surat Masuk</div>
                            <div class="text-center fw-bold fs-1">{{ $totalsuratmasuk }} Surat</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg id="suratkeluar" xmlns="http://www.w3.org/2000/svg" height="3em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        #suratkeluar {
                                            fill: #06e7f7
                                        }
                                    </style>
                                    <path
                                        d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                </svg>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Jumlah Surat Keluar</div>
                            <div class="text-center fw-bold fs-1">{{ $totalsuratkeluar }} Surat</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed mt-8 mb-5"></div>

            <div class="row" style="row-gap: 20px">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_usaha }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan usaha</div>
                            <div class="text-center small">Ada {{ $ket_usaha }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-usaha') }}" class="btn btn-primary p-3 py-2">Lihat Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_pindah }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan pindah</div>
                            <div class="text-center small">Ada {{ $ket_pindah }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-pindah') }}" class="btn btn-primary p-3 py-2">Lihat Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_hewan }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Pengantar Hewan</div>
                            <div class="text-center small">Ada {{ $ket_hewan }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-hewan') }}" class="btn btn-primary p-3 py-2">Lihat Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_jualbeli }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Jual Beli</div>
                            <div class="text-center small">Ada {{ $ket_jualbeli }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-jualbeli') }}" class="btn btn-primary p-3 py-2">Lihat
                                    Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_wali }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Wali</div>
                            <div class="text-center small">Ada {{ $ket_wali }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-wali') }}" class="btn btn-primary p-3 py-2">Lihat
                                    Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_kematian }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Kematian</div>
                            <div class="text-center small">Ada {{ $ket_kematian }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-kematian') }}" class="btn btn-primary p-3 py-2">Lihat
                                    Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_hilang }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Hilang</div>
                            <div class="text-center small">Ada {{ $ket_hilang }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-hilang') }}" class="btn btn-primary p-3 py-2">Lihat
                                    Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body h-175px">
                            <div class="p-2 rounded-circle"
                                style="display: flex; align-items: center; position: absolute; top: 0; right: 0;">
                                <svg height="1.5em" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: rgb(223, 57, 57)
                                        }
                                    </style>
                                    <path
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <div
                                    style="font-weight: bolder; color: rgb(223, 57, 57); font-size: 10px; margin-top: -13px">
                                    {{ $ket_tidak_mampu }}</div>
                            </div>
                            <div class="fs-5 fw-bolder text-center text-capitalize">Keterangan Tidak Mampu</div>
                            <div class="text-center small">Ada {{ $ket_tidak_mampu }} permohonan belum di verifikasi</div>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ route('admin.ket-tidak_mampu') }}" class="btn btn-primary p-3 py-2">Lihat
                                    Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
