<div id="form-overlay">
<div id="register-form" class="fixed w-screen overflow-y-scroll h-screen p-6  my-2 rounded-lg dark:border-dark-700">
<form action="#" method="POST" class="max-w-screen-md mx-auto p-4 bg-light-300 rounded shadow-md">
    @csrf

    <div class="flex items-center justify-between">
                <h2 class="font-normal text-dark-700 text-xl sm:text-2xl">AYA LE RECUPERAN</h2>
                <!--Editar-->
                <div class="flex">
                    <div class="p-4 text-primary-700 hover:text-complem-400">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                    </div>
                </div>
            </div>

    <div class="mb-4">
        <label for="email" class="block text-dark-700">Email</label>
        <input type="email" id="email" name="email" class="p-2 border border-dark-300 rounded-md w-full" required>
        <span class="text-danger-400 text-xs">$mensaje</span>
</div>

    <input type="submit" class=" flex w-full bg-info-500 text-light-200 px-4 py-2 rounded-md hover:bg-info-600" value="Enviar">
</form>
</div>
</x-layout>