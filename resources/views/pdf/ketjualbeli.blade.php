<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Peralihan / Pengoperan Jual Beli</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            margin-top: 15px;
            font-size: 15px;
            padding: 50px 75px;
        }

        .kop-surat {
            border-bottom: 3px solid #333;
            padding-bottom: 10px;
            margin-bottom: 15px;
            display: grid;
            align-items: center;
        }

        .logo {
            float: left;
            /* margin-right: 20px; */
            position: absolute;
        }

        .logo img {
            max-width: 100px;
            max-height: 90px;
        }

        .perusahaan-info {
            overflow: hidden;
            text-align: center;
            display: grid;
            gap: 3px;
            /* Untuk menangani float */
        }

        .perusahaan-info p {
            margin: 0;
        }

        .alamat {
            margin-top: 10px;
        }

        .content {
            width: 100%;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            margin-right: 50px;
        }

        #table-data th {
            padding: 10px
        }

        #table-data td {
            padding: 10px
        }

        @page {
            margin: 0;

            @top-center {
                content: none;
            }

            @bottom-center {
                content: none;
            }
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</head>

@php
    setlocale(LC_TIME, 'id_ID.utf8'); // Set locale ke bahasa Indonesia

    $tanggalSekarang = strftime('%d %B %Y');
    $hari = strftime('%A');

    $formatter = new NumberFormatter('id', NumberFormatter::SPELLOUT);
@endphp

<body>
    <div class="container">
        <div class="kop-surat">
            <div class="logo">
                <img src="{{ asset('logo.png') }}" alt="">
            </div>

            <div class="perusahaan-info">
                <div style="font-weight: bold; font-size: 19px;">PEMERINTAH DESA BARUA</div>
                <div style="font-weight: bolder; font-size: 18px;">KECAMATAN EREMERASA</div>
                <div style="font-weight: bolder; font-size: 18px;">KABUPATEN BANTAENG</div>
                <div style="font-size: 10px">Alamat : Jl. Poros Jannayya Desa Barua Kec. Eremerasa Kab. Bantaeng 92415
                </div>
            </div>
        </div>

        <div class="content">
            <div style="text-align: center; font-weight: bold; font-size: 16px; text-decoration: underline">SURAT
                PERALIHAN / PENGOPERAN
                JUAL BELI TANAH</div>
            <div style="text-align: center; font-size: 15px;">Nomor : {{ $ketjualbeli->nomor_surat }}</div>
            <div style="width: 100%; margin-top: 50px; font-size: 16px">
                <div>Kami yang bertanda tangan / cap jempol di bawah ini kami masing-masing menerangkan bahwa :</div>
                <div>Pihak Pertama</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->nama_penjual }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->nik_penjual }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl Lahir</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->tempat_lahir_penjual . ', ' . $ketjualbeli->tanggal_lahir_penjual }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->pekerjaan_penjual }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->alamat_penjual }}</td>
                    </tr>
                </table>
                <div>Pihak Kedua</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->nama_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->nik_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl Lahir</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->tempat_lahir_pembeli . ', ' . $ketjualbeli->tanggal_lahir_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->pekerjaan_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->alamat_pembeli }}</td>
                    </tr>
                </table>

                <div style="margin-top: 10px;">Dengan ini menyatakan dengan sebenar-benarnya dalam surat perjanjian ini
                    bahwa :</div>
                <p style="text-indent: 50px; margin: 0;">Pada hari ini {{ $hari }} tanggal
                    {{ $tanggalSekarang }} PIHAK
                    PERTAMA telah mengalihkan/mengoperkan Hak atas sebagian Tanah kebun dengan SPPT Nomor :
                    {{ $ketjualbeli->no_sppt }} Atas Nama {{ $ketjualbeli->nama_pemilik_tanah }} dan Sertifikat Nomor
                    {{ $ketjualbeli->no_sertifikat }} Kepada
                    PIHAK KEDUA Seluas {{ $ketjualbeli->luas_tanah }} M²
                    ({{ $formatter->format($ketjualbeli->luas_tanah) }} meter persegi) dengan harga / ganti
                    rugi sebesar {{ 'Rp. ' . number_format($ketjualbeli->harga_tanah, 0, ',', '.') }},-
                    ({{ $formatter->format($ketjualbeli->harga_tanah) }}) yang terletak di
                    {{ $ketjualbeli->lokasi_tanah }} dengan batas -
                    batas sebagai berikut :</p>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Sebelah Utara</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->batas_utara }}</td>
                    </tr>
                    <tr>
                        <td>Sebelah Timur</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->batas_timur }}</td>
                    </tr>
                    <tr>
                        <td>Sebelah Selatan</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->batas_selatan }}</td>
                    </tr>
                    <tr>
                        <td>Sebelah Barat</td>
                        <td>:</td>
                        <td>{{ $ketjualbeli->batas_barat }}</td>
                    </tr>
                </table>
                <ul style="margin-top: 0;">
                    <li>PIHAK KEDUA telah membayar ganti rugi Peralihan/Pengoperan hak atas tanah tersebut di atas dan
                        PIHAK PERTAMA mengaku telah menerima pembayaran dimaksud dalam keadaan cukup dan untuk menerima
                        uang Sah tersebut surat perjanjian Pengoperan Hak Atas Tanah ini berlaku pula sebagai tanda
                        bukti penerimaan yang sah (kwitansi). </li>
                    <li>PIHAK PERTAMA telah menyerahkan tanah dan tanaman yang ada di atas kepada PIHAK KEDUA dan oleh
                        karenanya segala keuntungan yang didapat dari dan segala kerugian / beban atas objek Pengoperan
                        Hak Atas Tanah tersebut di atas menjadi hak/beban PIHAK KEDUA.</li>
                    <li>PIHAK PERTAMA menjamin bahwa objek Pengoperan Hak Atas Tanah Tersebut di atas tidak tersangkut
                        sesuatu sengketa, bebas dari sitaan, tidak terikat sesuatu jaminan Utang dan Bebas dari
                        beban-beban lainnya.</li>
                </ul>

                <p style="margin-top: 10px; text-indent: 50px;">Demikianlah surat perjanjian Pengoperan Hak Atas Tanah
                    ini kami buat dalam keadaan sadar, tanpa paksaan dan tekanan dari pihak lain untuk dapat
                    dipergunakan sebagaimana mestinya.</p>
            </div>

            <!-- ... Isi surat lainnya ... -->
        </div>

        <div class="footer" style="margin-top: 500px">
            <div>
                <p style="margin-top: 60px">
                    PIHAK KEDUA,
                </p>
                <p>Yang Membeli</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    {{ $ketjualbeli->nama_pembeli }}
                </p>
            </div>
            <div>
                <p>
                    Barua, {{ $tanggalSekarang }}
                </p>
                <p>PIHAK PERTAMA</p>
                <p>Yang Mengalihkan (Penjual)</p>
                <br>
                <div>Materai</div>
                <br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    {{ $ketjualbeli->nama_penjual }}
                </p>
            </div>
        </div>
        <div>
            <p style="text-align: center; font-weight: bold">
                Saksi-saksi
            </p>
            <div class="footer">
                <div>{{ $ketjualbeli->saksi1 }} (...............)</div>
                <div>{{ $ketjualbeli->saksi2 }} (...............)</div>
                <div>{{ $ketjualbeli->saksi3 }} (...............)</div>
            </div>
        </div>
        <div class="footer">
            <div>
                <p>
                    No.Reg. : {{ $ketjualbeli->no_reg }}
                </p>
                <p>Mengetahui,</p>
                <p>Kepala Desa Barua</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    MURSALIM, S.Pd
                </p>
            </div>
            <div style="margin-top: 64px">
                <p>Kepala Dusun Tabbuakang</p>
                <br>
                <br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    AWAL RAHMAT
                </p>
            </div>
        </div>
    </div>
</body>

</html>
