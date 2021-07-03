<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Fira Sans', sans-serif;
    }
    </style>
    <title>RWEB 7 | CRUD</title>
</head>

<body>

    <div class="relative w-screen h-screen flex flex-row">
        <div class="sidebar relative w-1/6 h-screen bg-gray-800 shadow-lg">
            <div class="m-8 pb-6 text-center text-xl font-semibold text-white border-b-2 border-gray-700">
                <h1 class="cursor-pointer uppercase hover:text-gray-200"><a href=<?= base_url().'index.php/home'?>>
                        Aplikasi Surat</a></h1>
            </div>
            <div
                class="m-8 pb-6 px-6 flex flex-row justify-center items-center text-center text-base text-white border-b-2 border-gray-700 cursor-pointer">
                <img src="<?= base_url() ?>/assets/img/logo.png" alt="" class="rounded w-6 h-6 mr-4">
                <h1 class="hover:text-gray-200"><?php echo $this->session->nama ?></h1>
            </div>
            <div class="m-8 pb-6 text-center text-base  text-white">
                <h1 class=" cursor-pointer hover:text-gray-200"><a href=<?= base_url().'index.php/home'?>>Home</a></h1>
            </div>
        </div>
        <div class="relative w-5/6 h-screen bg-gray-100">
            <div class="relative p-4 shadow w-full bg-white flex flex-row justify-between items-center">
                <div class="flex flex-col cursor-pointer">
                    <h1 class="text-lg tracking-wider">Dashboard</h1>
                </div>
                <div class="font-semibold cursor-pointer text-blue-600">
                    <form action="<?= base_url(). 'index.php/auth/logout' ?>" method="post">
                        <button type="submit" class="focus:outline-none hover:underline">Log Out</button>
                    </form>
                </div>
            </div>
            <div class="m-16 px-8 pt-2 pb-8 bg-white shadow-md">
                <div class="flex flex-row justify-between items-center pt-4 pb-2">
                    <h3 class="text-xl font-semibold">Data Surat</h3>
                    <a href="<?= base_url().'index.php/mhs/add'?>"
                        class="p-2 bg-blue-600 mt-6 rounded text-white font-semibold hover:bg-blue-700">Buat Surat</a>
                </div>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">No</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nomor Surat</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Keperluan</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Dibuat Tanggal</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php $no = 1?>
                        <?php foreach ($surat as $srt): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="text-center py-3 px-4 border-b border-gray-100"><?= $no++ ?></td>
                            <td class="text-center py-3 px-4 border-b border-gray-100"><?= $srt->Nomor ?></td>
                            <td class="text-center py-3 px-4 border-b border-gray-100"><?= $srt->Kepentingan ?></td>
                            <td class="text-center py-3 px-4 border-b border-gray-100"><?= $srt->created_at ?></td>
                            <td class="text-center py-3 px-4 border-b border-gray-100"><a
                                    href="<?= base_url().'index.php/surat/edit/'.$srt->Nomor ?>"
                                    class="p-2 rounded bg-yellow-400 shadow cursor-pointer mr-4 hover:bg-yellow-500"><i
                                        class="far fa-edit stroke-current text-gray-100"></i></a><a
                                    href="<?= base_url().'index.php/surat/delete/'.$srt->Nomor ?>"
                                    class="p-2 rounded bg-red-600 shadow cursor-pointer mr-4 hover:bg-red-700"><i
                                        class="far fa-trash-alt stroke-current text-gray-100"></i></a><a
                                    href="<?= base_url().'index.php/surat/print/'.$srt->Nomor ?>"
                                    class="p-2 rounded bg-blue-700 shadow cursor-pointer hover:bg-blue-800"
                                    target="__blank"><i class="fas fa-print stroke-current text-gray-100"></i></a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>