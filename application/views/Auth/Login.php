<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">

    <title>RWEB 7 | Login</title>
</head>

<body>

    <div class="relative h-screen w-screen flex flex-col justify-center items-center">
        <img src="<?= base_url() ?>/assets/img/logo.png" alt="logo" height="150px" width="150px">
        <h1 class="text-3xl font-bold p-4 tracking-wider">Login</h1>
        <form action="<?= base_url(). 'index.php/auth/login' ?>" method="post"
            class="w-96 flex flex-col border-2 border-gray p-4 rounded shadow">
            <span class="text-red-600"><?= $this->session->flashdata('err') ?></span>
            <label for="" class="font-semibold">NIM</label>
            <span class="text-red-600"><?= form_error('nim') ?></span>
            <input type="text" name="nim" placeholder="NIM"
                class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
            <label for="" class="font-semibold mt-4">Password</label>
            <span class="text-red-600"><?= form_error('password') ?></span>
            <input type="text" name="password" placeholder="Password"
                class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
            <button type="submit"
                class="p-2 bg-blue-600 mt-6 rounded text-white font-semibold focus:outline-none hover:bg-blue-700">Sign
                in</button>
        </form>
    </div>

</body>

</html>