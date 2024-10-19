<x-layout>
    <header>
        @include('blocks.nav')
    </header>
    <main class="pt-20">
        <!-- Contenedor Principal -->

        {{ $slot }}

    </main>
    <footer>
        @include('blocks.footer')
    </footer>
  
</x-layout>