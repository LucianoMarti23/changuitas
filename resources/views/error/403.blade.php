
<x-layout>

</x-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR----mod</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    <!--HTMX-->
    <script src="/htmx-v1-9-12.min.js"></script>
</head>

<body class=" text-light-200  bg-dark-950">
    <section class="relative w-full h-screen flex items-center justify-center  text-white">
        <div class="relative w-full max-w-4xl mx-auto">
            <img src="/img/Alert/Error-pag-A.png" alt="errorBanner" class="w-full h-auto max-w-full">
            <div class="absolute inset-0 px-4  flex flex-col justify-center  text-center  ">
                <div class="bg-dark-800  bg-opacity-70 p-6 rounded-md inline-block">
                    <h1
                        class="text-2xl sm:text-3xl lg:text-4xl leading-normal font-bold sm:font-extrabold tracking-wide mb-4">
                        Error 403:
                    </h1>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold mb-4">Acceso denegado.</h3>
                    <div class="pt-4">
                        <a class="btn-primary px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800 transition"
                            href="">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>