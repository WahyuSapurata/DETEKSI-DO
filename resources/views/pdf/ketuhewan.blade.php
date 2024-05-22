<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar Hewan</title>
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
                PENGANTAR HEWAN</div>
            <div style="text-align: center; font-size: 15px;">Nomor : {{ $kethewan->nomor_surat }}</div>
            <div style="width: 100%; margin-top: 50px; font-size: 16px">
                <div>Yang bertanda tangan di bawah ini :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td style="font-weight: bolder">Mursalim, S.Pd</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>Kepala Desa Barua</td>
                    </tr>
                </table>
                <div style="margin-top: 20px">Menerangkan Bahwa :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $kethewan->nama }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>{{ $kethewan->umur }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $kethewan->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $kethewan->alamat }}</td>
                    </tr>
                </table>

                <div style="margin-top: 20px">Orang tersebut di atas benar-benar memiliki hewan sebanyak
                    {{ $kethewan->jumlah_hewan }} ekor</div>
                <table id="table-data" border="1px" style="margin-top: 20px; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>JENIS HEWAN</th>
                            <th>JENIS KELAMIN</th>
                            <th>WARNA BULU</th>
                            <th>UMUR</th>
                            <th>TANDUK</th>
                            <th>PUSAR</th>
                            <th>CAP BAKAR</th>
                            <th>NO. KARTU</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datahewan as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row['jenis_hewan'] }}</td>
                                <td>{{ $row['jenis_kelamin'] }}</td>
                                <td>{{ $row['warna_bulu'] }}</td>
                                <td>{{ $row['umur'] }}</td>
                                <td>{{ $row['tanduk'] }}</td>
                                <td>{{ $row['pusar'] }}</td>
                                <td>{{ $row['cap_bakar'] }}</td>
                                <td>{{ $row['no_kartu'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div style="margin-top: 20px">Hewan tersebut di atas akan dijual dan di antar kepada :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $kethewan->nama_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>{{ $kethewan->umur_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $kethewan->pekerjaan_pembeli }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $kethewan->alamat_pembeli }}</td>
                    </tr>
                </table>

                <p style="margin-top: 10px; text-indent: 50px;">Demikian surat keterangan pengantar hewan ini kami
                    berikan
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
                    Mengetahui,
                </p>
                <p>Kepala Desa Barua</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    MURSALIM, S.Pd
                </p>
            </div>
            <div>
                <p>
                    Barua, {{ $tanggalSekarang }}
                </p>
                <p>Yang Menjual</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    {{ $kethewan->nama }}
                </p>
            </div>
        </div>
    </div>
</body>

</html>
