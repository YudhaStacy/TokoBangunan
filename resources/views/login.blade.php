<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto"
                src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 font-sans">Masuk ke sistem
                Toko Bangunan tes
            </h2>

        </div>



        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            @if (session('gagal'))
                <p class="text-red-600 text-center">{{ session('gagal') }}</p>
            @endif
            <form class="space-y-6" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    <div class="mt-2 flex items-center">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <button type="button" id="togglePassword"
                            class="ml-2 rounded-md bg-gray-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gray-500 transition">
                            <img src="icons/eye.svg" alt="togle password" class="h-6">
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-sm flex items-center gap-2 ">
                        <input type="checkbox" name="tetapLogin" id="tetapLogin"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <label for="tetapLogin" class="font-semibold text-gray-800">Tetap Login</label>
                    </div>
                    <div class="text-sm">
                        <a href="#"
                            class="font-semibold text-gray-700 hover:text-gray-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">Lupa
                            Password</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-orange-500 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Belum punya akun?
                <a href="/registrasi" class="font-semibold text-indigo-600 hover:text-indigo-500">Daftar</a>
            </p>
        </div>

    </div>


</body>

</html>
