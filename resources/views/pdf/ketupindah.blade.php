<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Pindah</title>
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
            padding: 50px 80px;
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
            float: right;
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
                KETERANGAN PINDAH DOMISILI</div>
            <div style="text-align: center; font-size: 15px;">Nomor : {{ $ketpindah->nomor_surat }}</div>
            <div style="width: 100%; margin-top: 50px; font-size: 16px">
                <div>Data Asala Daerah :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>No Kartu Keluarga</td>
                        <td>:</td>
                        <td>{{ $ketpindah->no_kk }}</td>
                    </tr>
                    <tr>
                        <td>Nama Kepala Keluarga</td>
                        <td>:</td>
                        <td>{{ $ketpindah->kepala_keluarga }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $ketpindah->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $ketpindah->pekerjaan }}</td>
                    </tr>
                </table>
                <div style="margin-top: 20px">Data Kepindahan :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Alamat Tujuan Pindah</td>
                        <td>:</td>
                        <td>{{ $ketpindah->alamat_pindah }}</td>
                    </tr>
                    <tr>
                        <td>Klarifikasi Pindah</td>
                        <td>:</td>
                        <td>{{ $ketpindah->klarifikasi_pindah }}</td>
                    </tr>
                    <tr>
                        <td>Rencana Pindah</td>
                        <td>:</td>
                        <td>{{ $ketpindah->rencana_pindah }}</td>
                    </tr>
                    <tr>
                        <td>Keluarga yang Pindah</td>
                        <td>:</td>
                        <td>{{ $ketpindah->keluarga_pindah . ' ORANG' }}</td>
                    </tr>
                </table>

                <table id="table-data" border="1px" style="margin-top: 20px; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Tgl. Lahir</th>
                            <th>Hubungan Keluarga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataFull as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->tempat_lahir . ', ' . $row->tanggal_lahir }}</td>
                                <td>{{ $row->hubungan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p style="margin-top: 10px; text-indent: 50px;">Demikian surat keterangan pindah ini kami berikan
                    kepadanya untuk
                    dipergunkan sebagai mana perlunya</p>
            </div>

            <!-- ... Isi surat lainnya ... -->
        </div>

        <div class="footer">
            @php
                setlocale(LC_TIME, 'id_ID.utf8'); // Set locale ke bahasa Indonesia

                $tanggalSekarang = strftime('%d %B %Y');
            @endphp
            <div>
                <p>
                    Barua, {{ $tanggalSekarang }}
                </p>
                <p>Kepala Desa Barua</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    MURSALIM, S.Pd
                </p>
            </div>
        </div>
    </div>
</body>

</html>
