<x-page>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template profiles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    
</head>
<body class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900 ">
   <br>

                <div class="w-full max-w-7xl mx-auto px-4 py-6 relative z-10">
                    <h2 class="text-2xl text-center font-bold text-dark-900 dark:text-dark-200 mb-4">Usuarios Destacados
                    </h2>
                    <!-- Contenedor de las burbujas -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                        <div class="relative w-64 h-64 mx-auto">
                            <div class="relative h-full w-full flex items-center justify-center">
                                <div
                                    class="profileCard_container relative p-10 border-2 border-dashed rounded-full border-spacing-4 border-dark-400/50">
                                    <!--FOTOGRAFIA-->
                                    <button
                                        class="profile_item w-[200px] h-[200px] p-1 border-2 rounded-full hover:border-dark-400/50 cursor-pointer transition-all duration-500 z-0">
                                        <div
                                            class="w-full bg-light-200 h-full flex items-center justify-center p-2 rounded-full active:scale-95 hover:scale-95 object-cover transition-all duration-500">
                                            <span class="w-20 h-20 inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.99296258,10.5729355 C12.478244,10.5729355 14.4929626,8.55821687 14.4929626,6.0729355 C14.4929626,3.58765413 12.478244,1.5729355 9.99296258,1.5729355 C7.5076812,1.5729355 5.49296258,3.58765413 5.49296258,6.0729355 C5.49296258,8.55821687 7.5076812,10.5729355 9.99296258,10.5729355 Z M10,0 C13.3137085,0 16,2.6862915 16,6 C16,8.20431134 14.8113051,10.1309881 13.0399615,11.173984 C16.7275333,12.2833441 19.4976819,15.3924771 19.9947005,19.2523727 C20.0418583,19.6186047 19.7690435,19.9519836 19.3853517,19.9969955 C19.0016598,20.0420074 18.6523872,19.7816071 18.6052294,19.4153751 C18.0656064,15.2246108 14.4363723,12.0699838 10.034634,12.0699838 C5.6099956,12.0699838 1.93381693,15.231487 1.39476476,19.4154211 C1.34758036,19.7816499 0.998288773,20.0420271 0.614600177,19.9969899 C0.230911582,19.9519526 -0.0418789616,19.6185555 0.00530544566,19.2523267 C0.500630192,15.4077896 3.28612316,12.3043229 6.97954305,11.1838052 C5.19718955,10.1447285 4,8.21217353 4,6 C4,2.6862915 6.6862915,0 10,0 Z"
                                                        fill="#555"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                    <button
                                        class="profile_item left-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button0">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item right-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button1">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item -left-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button2">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item -right-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button3">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item bottom-8 -left-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button4">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item bottom-8 -right-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500 "
                                        id="butto5">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item right-[40%] -bottom-4 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500 "
                                        id="button6">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Repetir este bloque por cada usuario destacado -->
                        @foreach ($profiles as $profile )
                        
                         <div class="relative p-4 text-center group">

  

                            <!-- Imagen del usuario -->
                            <img src="{{ asset('storage/' . ($profile->profile_picture ? $profile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                                class="w-48 h-48 object-cover rounded-full shadow-2xl shadow-primary-500/50 mx-auto border-4 border-primary-600 animate-bounceBubble">
                            <!-- Nombre y oficio del usuario encima de la imagen -->
                            <div
                                class="absolute bot-0 left-0 right-0 p-2 text-light-800 dark:text-light-200 bg-black bg-opacity-60 rounded-t-full">
                                <h3 class="text-dm font-semibold truncate">{{$profile->first_name}} {{$profile->last_name}}</h3>
                                <p class="text-sm truncate">Oficio del Usuario </p>
                            </div>
                    </div>
                
                    @endforeach
              
                </div>
            </div>
        </div>
    </div>
   
    </div>
   
</body>
</html>
</x-page>