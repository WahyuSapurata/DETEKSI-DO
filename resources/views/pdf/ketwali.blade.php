<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Wali</title>
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
                KETERANGAN WALI</div>
            <div style="text-align: center; font-size: 15px;">Nomor : {{ $ketwali->nomor_surat }}</div>
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
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jannayya Dusun Jannayya Desa Barua</td>
                    </tr>
                </table>
                <div style="margin-top: 20px">Dengan ini menerangkan Bahwa yang bersangkutan di bawah ini :</div>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $ketwali->nama }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl Lahir</td>
                        <td>:</td>
                        <td>{{ $ketwali->tempat_lahir . ', ' . $ketwali->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Nik</td>
                        <td>:</td>
                        <td>{{ $ketwali->nik }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $ketwali->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $ketwali->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $ketwali->agama }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $ketwali->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $ketwali->alamat }}</td>
                    </tr>
                </table>

                <p style="margin-top: 10px; text-indent: 50px;">Adalah benar warga kami yang berdomisili di Kp.
                    {{ $ketwali->alamat }} RT
                    {{ $ketwali->rt }} RW {{ $ketwali->rw }} Provinsi Sulawesi selatan yang
                    merupakan wali dari {{ $ketwali->nama_anak }} Tempat tanggal lahir
                    {{ $ketwali->tempat_lahir_anak }} {{ $ketwali->tanggal_lahir_anak }}, untuk menerima Bantuan
                    Anak Yatim Piatu ( Yapi ) di Bank {{ $ketwali->nama_bank }}.</p>
                <p style="margin-top: 20px; text-indent: 50px;">Demikian surat keterangan wali ini diberikan kepadanya
                    untuk dipergunakan
                    sebagaimana mestinya.</p>
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
                    Bantaeng, {{ $tanggalSekarang }}
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
