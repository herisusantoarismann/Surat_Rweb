<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>RWEB 7 | CRUD</title>
</head>

<body>

    <div class="relative w-screen h-screen flex flex-row">
        <div class="relative w-1/6 h-screen bg-gray-800 shadow-lg ">
            <div class="m-8 pb-6 text-center text-xl font-semibold text-white border-b-2 border-gray-700">
                <h1 class="cursor-pointer">CRUD CI3</h1>
            </div>
            <div
                class="m-8 pb-6 px-6 flex flex-row justify-center items-center text-center text-base text-white border-b-2 border-gray-700 cursor-pointer">
                <img src="<?= base_url() ?>/assets/img/logo.png" alt="" class="rounded w-6 h-6 mr-4">
                <h1><?php echo $this->session->nama ?></h1>
            </div>
            <div class="m-8 pb-6 text-center text-base  text-white">
                <h1 class=" cursor-pointer">Home</h1>
            </div>
        </div>
        <div class="relative w-5/6 h-screen bg-gray-100">
            <div class="relative p-4 shadow w-full bg-white flex flex-row justify-between items-center">
                <div class="flex flex-col cursor-pointer">
                    <span class="w-8 h-1 bg-black"></span>
                    <span class="w-8 h-1 mt-1 bg-black"></span>
                    <span class="w-8 h-1 mt-1 bg-black"></span>
                </div>
                <div class="font-semibold cursor-pointer text-blue-600">
                    <form action="<?= base_url(). 'index.php/auth/logout' ?>" method="post">
                        <button type="submit">Log Out</button>
                    </form>
                </div>
            </div>
            <div class="m-16 px-8 pt-2 pb-8 bg-white">
                <div class="flex flex-row justify-between items-center pt-4 pb-2">
                    <h3 class="text-xl font-semibold">Data Mahasiswa</h3>
                    <a href="<?= base_url().'index.php/mhs/add'?>"
                        class="p-2 bg-blue-600 mt-6 rounded text-white font-semibold hover:bg-blue-700">Tambah
                        Data</a>
                </div>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">No</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">NIM</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Semester</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Email</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php $no = 1?>
                        <?php foreach ($dataMhs as $mhs): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="text-center py-3 px-4"><?= $no++ ?></td>
                            <td class="text-center py-3 px-4"><?= $mhs->nama ?></td>
                            <td class="text-center py-3 px-4"><?= $mhs->nim ?></td>
                            <td class="text-center py-3 px-4"><?= $mhs->semester ?></td>
                            <td class="text-center py-3 px-4"><?= $mhs->email ?></td>
                            <td class="text-center py-3 px-4"><a href="<?= base_url().'index.php/mhs/edit/'.$mhs->id ?>"
                                    class="p-2 rounded bg-yellow-400 shadow cursor-pointer mr-4 hover:bg-yellow-500"><i
                                        class="far fa-edit "></i></a><a
                                    href="<?= base_url().'index.php/mhs/delete/'.$mhs->id ?>"
                                    class="p-2 rounded bg-red-600 shadow cursor-pointer hover:bg-red-700"><i
                                        class="far fa-trash-alt "></i></a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="m-16 px-8 pt-2 pb-8 bg-white">
                <div class="flex flex-row justify-between items-center pt-4  pb-2">
                    <h3 class="text-xl font-semibold">Data Dosen</h3>
                    <a href="<?= base_url().'index.php/dosen/add' ?>"
                        class="p-2 bg-blue-600 mt-6 rounded text-white font-semibold cursor-pointer hover:bg-blue-700">Tambah
                        Data</a>
                </div>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">No</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">NIY</th>
                            <th class="ttext-center py-3 px-4 uppercase font-semibold text-sm">Keahlian</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Email</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php $no = 1?>
                        <?php foreach ($dataDosen as $dosen): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="text-center py-3 px-4"><?= $no++ ?></td>
                            <td class="text-center py-3 px-4"><?= $dosen->nama ?></td>
                            <td class="text-center py-3 px-4"><?= $dosen->niy ?></td>
                            <td class="text-center py-3 px-4"><?= $dosen->keahlian ?></td>
                            <td class="text-center py-3 px-4"><?= $dosen->email ?></td>
                            <td class="text-center py-3 px-4"><a
                                    href="<?= base_url().'index.php/dosen/edit/'.$dosen->id ?>"
                                    class="p-2 rounded bg-yellow-400 shadow cursor-pointer mr-4 hover:bg-yellow-500"><i
                                        class="far fa-edit "></i></a><a
                                    href="<?= base_url().'index.php/dosen/delete/'.$dosen->id ?>"
                                    class="p-2 rounded bg-red-600 shadow cursor-pointer hover:bg-red-700"><i
                                        class="far fa-trash-alt "></i></apache_reset_timeout>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>