<div>
    <!-- Well begun is half done. - Aristotle -->
    {{-- ket usaha --}}
    <div class="modal fade" tabindex="-1" id="ket_usaha">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-usaha') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik">
                            <small class="text-danger nik_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            <small class="text-danger tempat_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir" class="form-label">Tanggal
                                Lahir</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir"
                                id="tanggal_lahir">
                            <small class="text-danger tanggal_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger jenis_kelamin_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-select" data-placeholder="Pilih status">
                                <option></option>
                                <option value="kawin">Kawin</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                            <small class="text-danger status_perkawinan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="kewarganegaraan" id="kewarganegaraan">
                            <small class="text-danger kewarganegaraan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="agama" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama">
                            <small class="text-danger agama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket pindah --}}
    <div class="modal fade" tabindex="-1" id="ket_pindah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-pindah') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="no_kk" class="form-label">No Kartu Keluarga</label>
                            <input class="form-control" type="text" name="no_kk" id="no_kk">
                            <small class="text-danger no_kk_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
                            <input class="form-control" type="text" name="kepala_keluarga" id="kepala_keluarga">
                            <small class="text-danger kepala_keluarga_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat_pindah" class="form-label">Alamat Pindah</label>
                            <input class="form-control" type="text" name="alamat_pindah" id="alamat_pindah">
                            <small class="text-danger alamat_pindah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="klarifikasi_pindah" class="form-label">Klarifikasi Pindah</label>
                            <input class="form-control" type="text" name="klarifikasi_pindah"
                                id="klarifikasi_pindah">
                            <small class="text-danger klarifikasi_pindah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="rencana_pindah" class="form-label">Rencana Pindah</label>
                            <input class="form-control kt_datepicker_1" type="text" name="rencana_pindah"
                                id="rencana_pindah">
                            <small class="text-danger rencana_pindah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="keluarga_pindah" class="form-label">Jumlah Keluarga Pindah</label>
                            <input class="form-control" type="number" name="keluarga_pindah" id="keluarga_pindah">
                            <small class="text-danger keluarga_pindah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="deskripsi" class="form-label">Keterangan <span
                                    style="font-size: 10px; color: #EA443E; font-style: italic">(Nama yang pindah dan
                                    hubungan keluarga)</span></label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" data-kt-autosize="true"></textarea>
                            <small class="text-danger deskripsi_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_kk" class="form-label">Foto KK</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_kk"
                                id="foto_kk">
                            <small class="text-danger foto_kk_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket hewan --}}
    <div class="modal fade" tabindex="-1" id="ket_hewan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form class="form-data" enctype="multipart/form-data">
                        <label class="form-label fs-4">Data Diri</label>
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama_penjual">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="umur" class="form-label">Umur</label>
                            <input class="form-control" type="number" name="umur" id="umur">
                            <small class="text-danger umur_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan_penjual">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat_penjual">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jumlah_hewan" class="form-label">Jumlah Hewan</label>
                            <input class="form-control" type="number" name="jumlah_hewan" id="jumlah_hewan">
                            <small class="text-danger jumlah_hewan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon_penjual">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp_penjual">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <label class="form-label fs-4">Data Hewan</label>
                        <div class="mb-10">
                            <div class="inputs-container">
                                <div class="data-hewan">
                                    <div class="mb-5">
                                        <label class="form-label">Jenis Hewan</label>
                                        <input type="text" class="form-control jenis_hewan" name="jenis_hewan">
                                        <small class="text-danger jenis_hewan_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control jenis_kelamin"
                                            name="jenis_kelamin">
                                        <small class="text-danger jenis_kelamin_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Warna Bulu</label>
                                        <input type="text" class="form-control warna_bulu" name="warna_bulu">
                                        <small class="text-danger warna_bulu_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Umur</label>
                                        <input type="text" class="form-control umur" name="umur">
                                        <small class="text-danger umur_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Tanduk</label>
                                        <input type="text" class="form-control tanduk" name="tanduk">
                                        <small class="text-danger tanduk_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Pusar</label>
                                        <input type="text" class="form-control pusar" name="pusar">
                                        <small class="text-danger pusar_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Cap Bakar</label>
                                        <input type="text" class="form-control cap_bakar" name="cap_bakar">
                                        <small class="text-danger cap_bakar_error"></small>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">No Kartu</label>
                                        <input type="text" class="form-control no_kartu" name="no_kartu">
                                        <small class="text-danger no_kartu_error"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5 justify-content-center">
                                <button class="btn btn-success tambah-btn">Tambah</button>
                                <button class="btn btn-danger hapus-btn">Hapus</button>
                            </div>
                        </div>

                        <label class="form-label fs-4">Data Pembeli</label>
                        <div class="mb-10">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input class="form-control" type="text" name="nama_pembeli" id="nama_pembeli">
                            <small class="text-danger nama_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="umur_pembeli" class="form-label">Umur Pembeli</label>
                            <input class="form-control" type="number" name="umur_pembeli" id="umur_pembeli">
                            <small class="text-danger umur_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan_pembeli" class="form-label">Pekerjaan Pembeli</label>
                            <input class="form-control" type="text" name="pekerjaan_pembeli"
                                id="pekerjaan_pembeli">
                            <small class="text-danger pekerjaan_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat_pembeli" class="form-label">Alamat Pembeli</label>
                            <input class="form-control" type="text" name="alamat_pembeli" id="alamat_pembeli">
                            <small class="text-danger alamat_pembeli_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket jual beli --}}
    <div class="modal fade" tabindex="-1" id="ket_jualbeli">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-jualbeli') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label class="form-label fs-4">Pihak Pertama</label>
                        <div class="mb-10">
                            <label for="nama_penjual" class="form-label">Nama Penjual</label>
                            <input class="form-control" type="text" name="nama_penjual" id="nama_penjual">
                            <small class="text-danger nama_penjual_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik_penjual" class="form-label">NIK Penjual</label>
                            <input class="form-control" type="text" name="nik_penjual" id="nik_penjual">
                            <small class="text-danger nik_penjual_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir_penjual" class="form-label">Tempat Lahir Penjual</label>
                            <input class="form-control" type="text" name="tempat_lahir_penjual"
                                id="tempat_lahir_penjual">
                            <small class="text-danger tempat_lahir_penjual_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir_penjual" class="form-label">Tanggal
                                Lahir Penjual</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir_penjual"
                                id="tanggal_lahir_penjual">
                            <small class="text-danger tanggal_lahir_penjual_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan_penjual" class="form-label">Pekerjaan Penjual</label>
                            <input class="form-control" type="text" name="pekerjaan_penjual"
                                id="pekerjaan_penjual">
                            <small class="text-danger pekerjaan_penjual_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat_penjual" class="form-label">Alamat Penjual</label>
                            <input class="form-control" type="text" name="alamat_penjual" id="alamat_penjual">
                            <small class="text-danger alamat_penjual_error"></small>
                        </div>

                        <label class="form-label fs-4">Pihak Kedua</label>
                        <div class="mb-10">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input class="form-control" type="text" name="nama_pembeli" id="nama_pembeli">
                            <small class="text-danger nama_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik_pembeli" class="form-label">NIK Pembeli</label>
                            <input class="form-control" type="text" name="nik_pembeli" id="nik_pembeli">
                            <small class="text-danger nik_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir_pembeli" class="form-label">Tempat Lahir Pembeli</label>
                            <input class="form-control" type="text" name="tempat_lahir_pembeli"
                                id="tempat_lahir_pembeli">
                            <small class="text-danger tempat_lahir_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir_pembeli" class="form-label">Tanggal
                                Lahir Pembeli</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir_pembeli"
                                id="tanggal_lahir_pembeli">
                            <small class="text-danger tanggal_lahir_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan_pembeli" class="form-label">Pekerjaan Pembeli</label>
                            <input class="form-control" type="text" name="pekerjaan_pembeli"
                                id="pekerjaan_pembeli">
                            <small class="text-danger pekerjaan_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat_pembeli" class="form-label">Alamat Pembeli</label>
                            <input class="form-control" type="text" name="alamat_pembeli" id="alamat_pembeli">
                            <small class="text-danger alamat_pembeli_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_sppt" class="form-label">No SPPT</label>
                            <input class="form-control" type="text" name="no_sppt" id="no_sppt">
                            <small class="text-danger no_sppt_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nama_pemilik_tanah" class="form-label">Nama Pemilik Tanah</label>
                            <input class="form-control" type="text" name="nama_pemilik_tanah"
                                id="nama_pemilik_tanah">
                            <small class="text-danger nama_pemilik_tanah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_sertifikat" class="form-label">No Sertifikat</label>
                            <input class="form-control" type="text" name="no_sertifikat" id="no_sertifikat">
                            <small class="text-danger no_sertifikat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="luas_tanah" class="form-label">Luas Tanah</label>
                            <input class="form-control" type="text" name="luas_tanah" id="luas_tanah">
                            <small class="text-danger luas_tanah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="harga_tanah" class="form-label">Harga Tanah</label>
                            <input class="form-control" type="text" name="harga_tanah" id="harga_tanah">
                            <small class="text-danger harga_tanah_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="lokasi_tanah" class="form-label">Lokasi Tanah</label>
                            <input class="form-control" type="text" name="lokasi_tanah" id="lokasi_tanah">
                            <small class="text-danger lokasi_tanah_error"></small>
                        </div>

                        <label class="form-label fs-4">Batas Tanah</label>
                        <div class="mb-10">
                            <label for="batas_utara" class="form-label">Sebelah Utara</label>
                            <input class="form-control" type="text" name="batas_utara" id="batas_utara">
                            <small class="text-danger batas_utara_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="batas_timur" class="form-label">Sebelah Timur</label>
                            <input class="form-control" type="text" name="batas_timur" id="batas_timur">
                            <small class="text-danger batas_timur_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="batas_selatan" class="form-label">Sebelah Selatan</label>
                            <input class="form-control" type="text" name="batas_selatan" id="batas_selatan">
                            <small class="text-danger batas_selatan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="batas_barat" class="form-label">Sebelah Barat</label>
                            <input class="form-control" type="text" name="batas_barat" id="batas_barat">
                            <small class="text-danger batas_barat_error"></small>
                        </div>

                        <label class="form-label fs-4">Saksi Saksi</label>
                        <div class="mb-10">
                            <label for="saksi1" class="form-label">Saksi Pertama</label>
                            <input class="form-control" type="text" name="saksi1" id="saksi1">
                            <small class="text-danger saksi1_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="saksi2" class="form-label">Saksi Kedua</label>
                            <input class="form-control" type="text" name="saksi2" id="saksi2">
                            <small class="text-danger saksi2_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="saksi3" class="form-label">Saksi Ketiga</label>
                            <input class="form-control" type="text" name="saksi3" id="saksi3">
                            <small class="text-danger saksi3_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket wali --}}
    <div class="modal fade" tabindex="-1" id="ket_wali">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-wali') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            <small class="text-danger tempat_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir" class="form-label">Tanggal
                                Lahir</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir"
                                id="tanggal_lahir">
                            <small class="text-danger tanggal_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik">
                            <small class="text-danger nik_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger jenis_kelamin_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="agama" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama">
                            <small class="text-danger agama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="rt" class="form-label">RT</label>
                            <input class="form-control" type="text" name="rt" id="rt">
                            <small class="text-danger rt_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="rw" class="form-label">RW</label>
                            <input class="form-control" type="text" name="rw" id="rw">
                            <small class="text-danger rw_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nama_anak" class="form-label">Nama Anak</label>
                            <input class="form-control" type="text" name="nama_anak" id="nama_anak">
                            <small class="text-danger nama_anak_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir_anak" class="form-label">Tempat Lahir Anak</label>
                            <input class="form-control" type="text" name="tempat_lahir_anak"
                                id="tempat_lahir_anak">
                            <small class="text-danger tempat_lahir_anak_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir_anak" class="form-label">Tanggal
                                Lahir Anak</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir_anak"
                                id="tanggal_lahir_anak">
                            <small class="text-danger tanggal_lahir_anak_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nama_bank" class="form-label">Nama Bank</label>
                            <input class="form-control" type="text" name="nama_bank" id="nama_bank">
                            <small class="text-danger nama_bank_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket kematian --}}
    <div class="modal fade" tabindex="-1" id="ket_kematian">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-kematian') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            <small class="text-danger tempat_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir" class="form-label">Tanggal
                                Lahir</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir"
                                id="tanggal_lahir">
                            <small class="text-danger tanggal_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger jenis_kelamin_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-select" data-placeholder="Pilih status">
                                <option></option>
                                <option value="kawin">Kawin</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                            <small class="text-danger status_perkawinan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="kewarganegaran" class="form-label">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="kewarganegaran" id="kewarganegaran">
                            <small class="text-danger kewarganegaran_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="agama" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama">
                            <small class="text-danger agama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="hari_meninggal" class="form-label">Hari Meninggal</label>
                            <input class="form-control" type="text" name="hari_meninggal" id="hari_meninggal">
                            <small class="text-danger hari_meninggal_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_meninggal" class="form-label">Tanggal
                                Meninggal</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_meninggal"
                                id="tanggal_meninggal">
                            <small class="text-danger tanggal_meninggal_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jam_meninggal" class="form-label">Jam Meninggal</label>
                            <input type="time" id="jam_meninggal" class="form-control" name="jam_meninggal">
                            <small class="text-danger jam_meninggal_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_pemakaman" class="form-label">Tempat Pemakaman</label>
                            <input class="form-control" type="text" name="tempat_pemakaman"
                                id="tempat_pemakaman">
                            <small class="text-danger tempat_pemakaman_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket hilang --}}
    <div class="modal fade" tabindex="-1" id="ket_hilang">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-hilang') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik">
                            <small class="text-danger nik_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            <small class="text-danger tempat_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir" class="form-label">Tanggal
                                Lahir</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir"
                                id="tanggal_lahir">
                            <small class="text-danger tanggal_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select"
                                data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger jenis_kelamin_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-select" data-placeholder="Pilih status">
                                <option></option>
                                <option value="kawin">Kawin</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                            <small class="text-danger status_perkawinan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="agama" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama">
                            <small class="text-danger agama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="kewarganegaraan"
                                id="kewarganegaraan">
                            <small class="text-danger kewarganegaraan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nama_barang" class="form-label">Barang Yang Hilang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang">
                            <small class="text-danger nama_barang_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_hilang" class="form-label">Tanggal Hilang</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_hilang"
                                id="tanggal_hilang">
                            <small class="text-danger tanggal_hilang_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_hilang" class="form-label">Tempat Hilang</label>
                            <input class="form-control" type="text" name="tempat_hilang" id="tempat_hilang">
                            <small class="text-danger tempat_hilang_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ket tidak mampu --}}
    <div class="modal fade" tabindex="-1" id="ket_tidak_mampu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Registrasi Data</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body text-start">
                    <form action="{{ route('add-ket-tidak_mampu') }}" method="POST" class="form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-10">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                            <small class="text-danger nama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik">
                            <small class="text-danger nik_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            <small class="text-danger tempat_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="tanggal_lahir" class="form-label">Tanggal
                                Lahir</label>
                            <input class="form-control kt_datepicker_1" type="text" name="tanggal_lahir"
                                id="tanggal_lahir">
                            <small class="text-danger tanggal_lahir_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select"
                                data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger jenis_kelamin_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="kewarganegaraan"
                                id="kewarganegaraan">
                            <small class="text-danger kewarganegaraan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-select" data-placeholder="Pilih status">
                                <option></option>
                                <option value="kawin">Kawin</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                            <small class="text-danger status_perkawinan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                            <small class="text-danger pekerjaan_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="agama" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama">
                            <small class="text-danger agama_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                            <small class="text-danger alamat_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="nama_ortu" class="form-label">Nama Orang Tua/Kepala Keluarga</label>
                            <input class="form-control" type="text" name="nama_ortu" id="nama_ortu">
                            <small class="text-danger nama_ortu_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_telepon" id="no_telepon">
                            <small class="text-danger no_telepon_error"></small>
                        </div>

                        <div class="mb-10">
                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                            <input class="form-control" accept="image/*" type="file" name="foto_ktp"
                                id="foto_ktp">
                            <small class="text-danger foto_ktp_error"></small>
                        </div>

                        <div class="separator separator-dashed mt-8 mb-5"></div>
                        <div class="d-flex gap-5">
                            <button type="submit"
                                class="btn btn-primary btn-sm btn-submit-data-import d-flex align-items-center"><i
                                    class="bi bi-file-earmark-diff"></i> Simpan</button>
                            <button type="reset" data-bs-dismiss="modal"
                                class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                    style="color: #EA443E"></i>Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script>
    // Tambah inputan NIK dan Hubungan Keluarga
    document.querySelector('.tambah-btn').addEventListener('click', function(e) {
        e.preventDefault();
        var inputsContainer = document.querySelector('.inputs-container');
        var divElement = document.createElement('div');
        divElement.classList.add('data-hewan');
        divElement.innerHTML = `
        <div class="mb-5">
            <label class="form-label">Jenis Hewan</label>
            <input type="text" class="form-control jenis_hewan" name="jenis_hewan">
            <small class="text-danger jenis_hewan_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control jenis_kelamin" name="jenis_kelamin">
            <small class="text-danger jenis_kelamin_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Warna Bulu</label>
            <input type="text" class="form-control warna_bulu" name="warna_bulu">
            <small class="text-danger warna_bulu_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Umur</label>
            <input type="text" class="form-control umur" name="umur">
            <small class="text-danger umur_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Tanduk</label>
            <input type="text" class="form-control tanduk" name="tanduk">
            <small class="text-danger tanduk_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Pusar</label>
            <input type="text" class="form-control pusar" name="pusar">
            <small class="text-danger pusar_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">Cap Bakar</label>
            <input type="text" class="form-control cap_bakar" name="cap_bakar">
            <small class="text-danger cap_bakar_error"></small>
        </div>
        <div class="mb-5">
            <label class="form-label">No Kartu</label>
            <input type="text" class="form-control no_kartu" name="no_kartu">
            <small class="text-danger no_kartu_error"></small>
        </div>
    `;
        inputsContainer.appendChild(divElement);
    });

    document.querySelector('.hapus-btn').addEventListener('click', function(e) {
        e.preventDefault();
        var inputsContainer = document.querySelector('.inputs-container');
        var inputsCount = inputsContainer.querySelectorAll('div').length;

        // Pastikan ada setidaknya dua input tersisa sebelum menghapus
        if (inputsCount > 1) {
            inputsContainer.removeChild(inputsContainer.lastChild);
        }
    });

    document.querySelector('.btn-submit-data').addEventListener('click', function(e) {
        e.preventDefault();

        // Mengumpulkan data dari setiap input
        var formData = {
            nama: document.getElementById('nama_penjual').value,
            umur: document.getElementById('umur').value,
            pekerjaan: document.getElementById('pekerjaan_penjual').value,
            alamat: document.getElementById('alamat_penjual').value,
            jumlah_hewan: document.getElementById('jumlah_hewan').value,
            no_telepon: document.getElementById('no_telepon_penjual').value,
            foto_ktp: document.getElementById('foto_ktp_penjual').files[0], // Mengambil nama file saja
            data_hewan: [],
            nama_pembeli: document.getElementById('nama_pembeli').value,
            umur_pembeli: document.getElementById('umur_pembeli').value,
            pekerjaan_pembeli: document.getElementById('pekerjaan_pembeli').value,
            alamat_pembeli: document.getElementById('alamat_pembeli').value
        };

        // Mengumpulkan data dari setiap input pada data hewan
        var inputsContainer = document.querySelectorAll('.data-hewan');
        inputsContainer.forEach(function(container) {
            var jenisHewan = container.querySelector('.jenis_hewan').value;
            var jenisKelamin = container.querySelector('.jenis_kelamin').value;
            var warnaBulu = container.querySelector('.warna_bulu').value;
            var umurHewan = container.querySelector('.umur').value;
            var tanduk = container.querySelector('.tanduk').value;
            var pusar = container.querySelector('.pusar').value;
            var capBakar = container.querySelector('.cap_bakar').value;
            var noKartu = container.querySelector('.no_kartu').value;

            // Buat objek baru untuk setiap input hewan dan tambahkan ke dalam array data_hewan
            var newDataHewan = {
                jenis_hewan: jenisHewan,
                jenis_kelamin: jenisKelamin,
                warna_bulu: warnaBulu,
                umur: umurHewan,
                tanduk: tanduk,
                pusar: pusar,
                cap_bakar: capBakar,
                no_kartu: noKartu
            };

            formData.data_hewan.push(newDataHewan);
        });

        const token = @json(csrf_token());
        const endpoint = @json(route('add-ket-hewan'));

        // Membuat objek FormData untuk mengirim data ke server
        var formDataHewan = new FormData();
        for (var key in formData) {
            if (formData.hasOwnProperty(key)) {
                if (key === 'foto_ktp') {
                    formDataHewan.append(key, formData[key]);
                } else if (key === 'data_hewan') {
                    formDataHewan.append(key, JSON.stringify(formData[key]));
                } else {
                    formDataHewan.append(key, formData[key]);
                }
            }
        }

        // Melakukan permintaan POST ke server menggunakan fetch()
        fetch(endpoint, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": token,
                },
                body: formDataHewan,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Lakukan sesuatu dengan respon dari server (jika diperlukan)
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Mantap',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    }).then(() => {
                        window.location.href =
                            '{{ route('landing') }}'; // Menggunakan window.location.href untuk mengarahkan ke halaman baru
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    document.getElementById('harga_tanah').addEventListener('input', function() {
        let value = this.value;
        if (value !== "") {
            value = numeral(value).format('0,0'); // Format to rupiah
            this.value = 'Rp ' + value;
        }
    });
</script>
