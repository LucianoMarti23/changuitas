<x-page>
    <!-- Container -->
    <div class="flex">

        <!-- Navigation Profile -->
        <div class="w-1/5  pl-4 pb-4 pt-32 shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
            <x-profile.nav-profilecopy />
        </div>

        <!-- Main Content (right side) -->
        <div class="w-3/5 p-4">

            <!-- Header Profile  -->
            

            <!-- Dynamic Content Section -->
            <div class="mt-4 p-1 ">
                <!-- Aquí se incluye el contenido dinámico según la sección -->
                @yield('content')
            </div>

        </div>

    </div>
</x-page>