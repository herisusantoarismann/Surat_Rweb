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
                <h1>CRUD CI3</h1>
            </div>
            <div class="m-8 pb-6 text-center text-base text-white border-b-2 border-gray-700">
                <img src="" alt="">
                <h1>Heri Susanto A</h1>
            </div>
            <div class="m-8 pb-6 text-center text-base  text-white ">
                <h1>Home</h1>
            </div>
        </div>
        <div class="relative w-5/6 h-screen bg-gray-100">
            <div class="relative p-4 shadow w-full bg-white flex flex-row">
                <div class="flex flex-col cursor-pointer">
                    <span class="w-8 h-1 bg-black"></span>
                    <span class="w-8 h-1 mt-1 bg-black"></span>
                    <span class="w-8 h-1 mt-1 bg-black"></span>
                </div>
            </div>
            <div class="m-16 px-8 py-2 bg-white">
                <div class="flex flex-row justify-between items-center py-4">
                    <h3 class="text-xl font-semibold">Tambah Data Dosen</h3>
                </div>
                <form action="<?= base_url().'index.php/dosen' ?>" method="post"
                    class="w-full flex items-center flex-col">
                    <div class="w-2/5 flex flex-col mb-6">
                        <h5>Nama</h5>
                        <input type="text" name="nama" placeholder="Nama"
                            class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
                    </div>
                    <div class="w-2/5 flex flex-col mb-6">
                        <h5>NIY</h5>
                        <input type="text" name="niy" placeholder="NIY"
                            class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
                    </div>
                    <div class="w-2/5 flex flex-col mb-6">
                        <h5>Keahlian</h5>
                        <input type="text" name="keahlian" placeholder="Keahlian"
                            class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
                    </div>
                    <div class="w-2/5 flex flex-col mb-6">
                        <h5>Email</h5>
                        <input type="email" name="email" placeholder="Email"
                            class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
                    </div>
                    <button type="submit"
                        class="p-2 bg-blue-600 mb-6 rounded text-white font-semibold hover:bg-blue-700">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>