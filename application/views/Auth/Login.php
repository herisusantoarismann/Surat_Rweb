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
            <label for="" class="font-semibold">Email</label>
            <input type="email" name="email" placeholder="Email"
                class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
            <label for="" class="font-semibold mt-4">Password</label>
            <input type="text" name="password" placeholder="Password"
                class="border-2 border-gray p-2 rounded focus:outline-none focus:ring-1 focus:border-blue-300">
            <button type="submit" class="p-2 bg-blue-600 mt-6 rounded text-white font-semibold hover:bg-blue-700">Sign
                in</button>
        </form>
        <div class="w-96 border border-gray rounded shadow mt-6 p-2 text-center font-semibold">
            <p>Don't have an account? <span class="text-blue-600 cursor-pointer hover:underline"> Create an account
                    here.</span></p>
        </div>
    </div>

</body>

</html>