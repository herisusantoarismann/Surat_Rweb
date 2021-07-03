<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="text-center">
        <p class="fw-bold">Lampiran Surat Edaran Bersama Menteri Keuangan</p>
        <p style="line-height: 0px;">Kepala Badan Administrasi Kepegawaian Negara</p>
    </div>
    <div class="container w-25">
        <table>
            <tbody>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>38/DJA/I.C/7/80 (No.SE/117/80)</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>19/SE/1980</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>7 Juli 1980</td>
                </tr>
            <tbody>
        </table>
    </div>

    <div style="border: 2px; border-style:double; border-color:black;"></div>
    <div>
        <p class="container w-25 text-center border border-dark mt-3 p-2 fw-bold" style="border-color:black;">Surat
            Keterangan Kuliah</p>
    </div>
    <p class="text-center lh-1">Nomor : F2.1 /4/D.61/1/2020</p>
    <p>Yang bertanda tangan dibawah ini : </p>
    <div class="container">
        <table>
            <tbody>
                <tr>
                    <td>1. Nama</td>
                    <td>:</td>
                    <td><?= $dekan['namaDekan'] ?></td>
                </tr>
                <tr>
                    <td>2. Pangkat, Golongan, Ruang &nbsp;&nbsp;</td>
                    <td>:</td>
                    <td><?= $dekan['pangkat'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Jabatan Akademik</td>
                    <td>:</td>
                    <td><?= $dekan['jabatan'] ?></td>
                </tr>
                <tr>
                    <td>3. Jabatan</td>
                    <td>:</td>
                    <td><?= $dekan['jabatan_akademik'] ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>:</td>
                    <td>Fakultas Teknologi Industri</td>
                </tr>
                <tr>
                    <td>4. Pada Perguruan Tinggi</td>
                    <td>:</td>
                    <td>Universitas Ahmad Dahlan</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>dengan ini menyatakan dengan sesungguhnya bahwa :</p>
    <div class="container">
        <table>
            <tbody>
                <tr>
                    <td>5.
                        Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>:</td>
                    <td class="font-bold"><?= $this->session->nama ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>dengan benar-benar mahasiswa pada :</p>
    <div class="container">
        <table>
            <tbody>
                <tr>
                    <td>6. Perguruan Tinggi</td>
                    <td>:</td>
                    <td>Universitas Ahmad Dahlan</td>
                </tr>
                <tr>
                    <td>7. Semester</td>
                    <td>:</td>
                    <td><?= $this->session->semester ?></td>
                </tr>
                <tr>
                    <td>8. Nomor Induk Mahasiswa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>:</td>
                    <td><?= $this->session->nim ?></td>
                </tr>
                <tr>
                    <td>9. Jurusan/Program Studi</td>
                    <td>:</td>
                    <td><?= $this->session->jurusan ?></td>
                </tr>
                <tr>
                    <td>10. Pada Tahun Akademik</td>
                    <td>:</td>
                    <td>2020/2021</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>dan bahwa orang tua/wali anak tersebut adalah :</p>
    <div class="container">
        <table>
            <tbody>
                <tr>
                    <td>11. Nama</td>
                    <td>:</td>
                    <td><?= $surat[0]->ortu ?></td>
                </tr>
                <tr>
                    <td>12. NIP/NRP/NOPEN</td>
                    <td>:</td>
                    <td><?= $surat[0]->nip ?></td>
                </tr>
                <tr>
                    <td>13. Pangkat, Golongan, Ruang&nbsp;&nbsp;</td>
                    <td>:</td>
                    <td><?= $surat[0]->pangkat ?></td>
                </tr>
                <tr>
                    <td>14. Instansi</td>
                    <td>:</td>
                    <td><?= $surat[0]->instansi ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="text-align: justify;">
        <p>Demikian surat keterangan ini dibuat dengan sesungguhnya dan apabila
            dikemudian
            hari surat keterangan ini
            ternyata tidak benar, yang mengakibatkan kerugian terhadap Negara Republik Indonesa, maka mahasiswa yang
            bersangkutan bersedia menanggung kerugian tersebut.</p>
    </div>
    <br />
    <div class="text-end">
        <p>Yogyakarta, 05 Januari 2021 M</p>
        <img src="<?= base_url() . $dekan['ttd_cap'] ?>" alt="ttd" style="width:150px; height:150px;">
        <p class="font-bold"><?= $dekan['namaDekan'] ?></p>
        <p>NIY. <?= $dekan['NIY'] ?></p>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>