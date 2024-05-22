<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tidak Mampu</title>
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
                KETERANGAN USAHA</div>
            <div style="text-align: center; font-size: 15px;">Nomor : {{ $kettidakmampu->nomor_surat }}</div>
            <div style="width: 100%; margin-top: 50px; font-size: 16px">
                <div>Yang bertanda tangan di bawah ini :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td style="font-weight: bolder">YASSE, S.Pd I</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>Sekretaris Desa Barua</td>
                    </tr>
                </table>
                <div style="margin-top: 20px">Menerangkan Bahwa :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->nama }}</td>
                    </tr>
                    <tr>
                        <td>Nik</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->nik }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl Lahir</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->tempat_lahir . ', ' . $kettidakmampu->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->kewarganegaraan }}</td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->status_perkawinan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->agama }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Orang Tua/Kepala Keluarga</td>
                        <td>:</td>
                        <td>{{ $kettidakmampu->nama_ortu }}</td>
                    </tr>
                </table>

                <p style="margin-top: 10px; text-indent: 50px;">Orang tersebut di atas adalah benar keluarga yang
                    berdomisili sesuai alamat tersebut diatas dan terdaftar dalam golongan keluarga tidak mampu.</p>
                <p style="margin-top: 20px; text-indent: 50px;">Demikian surat keterangan Tidak Mampu ini kami berikan
                    kepadanya untuk dipergunakan sebagai mana mestinya, atas perhatian bapak kami ucapkan banyak terima
                    kasih.</p>
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
                <p>Kepala Desa Barua (Sekertaris)</p>
                <br><br>
                <p style="text-align: center; text-decoration: underline; font-weight: bold">
                    YASSE, S. Pd I
                </p>
            </div>
        </div>
    </div>
</body>

</html>
