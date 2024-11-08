<x-page>
<div class="pt-32">
  <!-- resources/views/faq.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Preguntas Frecuentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-8">Preguntas Frecuentes</h1>

        <!-- Pregunta 1 -->
        <div class="mb-4">
            <button class="w-full bg-blue-500 text-light-100 p-4 font-semibold text-left focus:outline-none transition duration-300 hover:bg-blue-600, " 
                onclick="toggleFaq(1)">
                ¿Qué es Changuitas?
            </button>
            <div id="faq-1" class="hidden p-4 border border-t-0 dark:text-dark-50  dark:bg-dark-800">
                <p>Changuitas es una red social de trabajo, donde permite contratar y encontrar trabajo de forma remota.</p>
            </div>
        </div>

        <!-- Pregunta 2 -->
        <div class="mb-4">
            <button class="w-full bg-blue-500 text-white p-4 font-semibold text-left focus:outline-none" 
                    onclick="toggleFaq(2)">
                ¿Donde surge la idea de changuitas?
            </button>
            <div id="faq-2" class="hidden p-4 border border-t-0 dark:text-dark-50  dark:bg-dark-800">
                <p>La idea de crear changuitas surgio a partir de necesitas laborales en nuestra ciudad, poder aportar recursos a aquellas personas con trabajos más informales como "cortador de cesped, pintura, paseador de mascotas etc". Facilitar la comunicación e evitar ir casa por casa ofreciendo servicios, "Ahora todo esta al alcanze de tu presente"</p>
            </div>
        </div>

        <!-- Añade más preguntas según sea necesario -->
        <div class="mb-4">
            <button class="w-full bg-blue-500 text-white p-4 font-semibold text-left focus:outline-none" 
                    onclick="toggleFaq(3)">
                ¿Como puedo encontrar trabajo?
            </button>
            <div id="faq-3" class="hidden p-4 border border-t-0 dark:text-dark-50  dark:bg-dark-800">
                <p>Si eres un proveedor de servicios, una vez completado tu perfil, las personas podran solicitarte segun sus necesidades, o podrás revisar las publicaciónes disponibles para buscar trabajo.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="w-full bg-blue-500 text-white p-4 font-semibold text-left focus:outline-none" 
                    onclick="toggleFaq(4)">
                ¿Como puedo contratar?
            </button>
            <div id="faq-4" class="hidden p-4 border border-t-0 dark:text-dark-50  dark:bg-dark-800">
                <p>Si necesitas contratar un servicio, puedes simplemente ir al buscador para encontrar perfiles con el servicio que necesitas y contratar a quien quieras, tambíen puedes crear una publicación especificando que servicio necesitas, la oferta y si es grupar o individual. .</p>
            </div>
        </div>
    </div>

    <!-- Script para mostrar/ocultar las respuestas -->
    <script>
        function toggleFaq(faqNumber) {
            const faq = document.getElementById(`faq-${faqNumber}`);
            faq.classList.toggle('hidden');
        }
    </script>
</body>
</html>

</div>



</x-page>