<x-layoutadmin>
  <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>

  <body class="bg-dark-100">
    <!-- Contenedor de 4 elementos-->
    <div class="w-full p-4 h-screen">
      <div class="grid grid-cols-2 gap-4">
        <!-- Contenedor para el gráfico REGISTRADOS-->
        <div class="h-30 w-full">
          <div id="registro" class="w-full p-4 h-[400px] w-full bg-light-100 rounded-lg shadow-lg"></div>
        </div>
        <!-- Contenedor para el gráfico PRINCIPAL INTERACION DEL USUARIO -->
        <div class="h-30 w-full  overflow-x-auto">
          <div id="publica_postula" class="w-full p-4 h-[400px] w-full bg-light-100 rounded-lg shadow-lg"></div>
        </div>
        <!-- Contenedor para el gráfico SUBCRIPCION-->
        <div class="h-30 w-full">
          <div id="Ingresos_sub" class="w-full p-4 h-[400px] w-full bg-light-100 rounded-lg shadow-lg">
            <span class="text-danger-500/50 text-2xl font-bold mb-4">Desabilitado</span>
          </div>
        </div>
        <!-- Contenedor para el CIUDADES-->
        <div class="h-30 w-full">
          <div id="" class="w-full  h-[400px] w-full bg-light-100 rounded-lg shadow-lg">
            <div class=" p-6  mx-auto">
              <h2 class="text-2xl font-semibold text-dark-800 text-center mb-4">Ciudades mas referenciadas</h2>
              <span class="text-danger-500/50 text-2xl font-bold mb-4">Desabilitado</span>
              <div class="max-h-60 overflow-y-auto">
                <ul class="space-y-1">
                  <li>Resistencia (Chaco)</li>
                  <li>Corrientes (Corrientes)</li>
                  <li>Posadas (Misiones)</li>
                  <li>Formosa (Formosa)</li>
                  <li>Eldorado (Misiones)</li>
                  <li>Goya (Corrientes)</li>
                  <li>Presidencia Roque Sáenz Peña (Chaco)</li>
                  <li>San Miguel de Tucumán (Tucumán)</li>
                  <li>Salta (Salta)</li>
                  <li>San Salvador de Jujuy (Jujuy)</li>
                  <li>Santiago del Estero (Santiago del Estero)</li>
                  <li>La Banda (Santiago del Estero)</li>
                  <li>Orán (Salta)</li>
                  <li>San Ramón de la Nueva Orán (Salta)</li>
                  <li>Termas de Río Hondo (Santiago del Estero)</li>
                  <li>Catamarca (Catamarca)</li>
                  <li>La Rioja (La Rioja)</li>
                </ul>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
    <!-- Contenedor SECCION DERECHO para el gráfico CATEGORIA DE TRABAJOS -->
    <div class=" w-3/4 h-screen p-4 px-6 ml-auto">
      <div id="categoria" class="w-full h-[400px] p-4 bg-light-100 rounded-lg shadow-lg"></div>

      <div id="" class="w-full mt-4 h-[400px] w-full bg-light-100 rounded-lg shadow-lg">
        <div class="p-4">
          <h2 class="text-2xl font-bold text-dark-800 text-center mb-4">Tareas Pendientes</h2>
          <span class="text-danger-500/50 text-2xl font-bold mb-4">Desabilitado</span>
          <ul class="space-y-3">
            <!-- Tarea 1 -->
            <li class="flex items-center space-x-3">
              <input type="checkbox" id="tarea1"
                class="h-5 w-5 text-info-600 rounded border-dark-300 focus:ring-info-500">
              <label for="tarea1" class="text-dark-700 text-lg">Revisar y eliminar publicaciones que incumplan las
                normas</label>
            </li>
            <!-- Tarea 2 -->
            <li class="flex items-center space-x-3">
              <input type="checkbox" id="tarea2"
                class="h-5 w-5 text-info-600 rounded border-dark-300 focus:ring-info-500">
              <label for="tarea2" class="text-dark-700 text-lg">Analizar y resolver reportes de contenido inapropiado o
                usuarios problemáticos.</label>
            </li>
            <!-- Tarea 3 -->
            <li class="flex items-center space-x-3">
              <input type="checkbox" id="tarea3"
                class="h-5 w-5 text-info-600 rounded border-dark-300 focus:ring-info-500">
              <label for="tarea3" class="text-dark-700 text-lg">Publicar anuncios o recordatorios importantes para todos
                los usuarios.
              </label>
            </li>
            <!-- Tarea 4 -->
            <li class="flex items-center space-x-3">
              <input type="checkbox" id="tarea4"
                class="h-5 w-5 text-info-600 rounded border-dark-300 focus:ring-info-500">
              <label for="tarea4" class="text-dark-700 text-lg">Controlar mensajes reportados por acoso o spam.</label>
            </li>
            <!-- Tarea 5 -->
            <li class="flex items-center space-x-3">
              <input type="checkbox" id="tarea5"
                class="h-5 w-5 text-info-600 rounded border-dark-300 focus:ring-info-500">
              <label for="tarea5" class="text-dark-700 text-lg">Actualizar o añadir nuevas categorías de trabajos
                demandados.</label>
            </li>
          </ul>
          <!-- Botón "Ver más" -->
          <div class="mt-4 text-end">
            <button class=" font-medium py-2 px-4 rounded-lg hover:text-info-500 ">
              Ver más ...
            </button>
          </div>
        </div>

      </div>
      <!-- Contenedor para el INTERACCIONES-->
    </div>



    <script>
      // usuarios cantidad registrados
      var data = {
        users: [120, 200, 150, 80, 70, 110, 130] // Datos de ejemplo
      };

      // Inicialización del gráfico
      var chartDom1 = document.getElementById('registro');
      var myChart = echarts.init(chartDom1);

      var option1 = {
        title: {
          text: 'Actividad de Usuarios',
          left: 'center',
          textStyle: {
            fontWeight: 'bold',
            fontSize: 18,
          }
        },
        xAxis: {
          type: 'category',
          data: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
          axisLabel: {
            color: '#4B5563' // Similar a text-dark-600 de Tailwind
          }
        },
        yAxis: {
          type: 'value',
          axisLabel: {
            color: '#4B5563' // Similar a text-dark-600 de Tailwind
          }
        },
        series: [
          {
            name: 'Usuarios Registrados',
            data: data.users,
            type: 'bar',
            showBackground: true,
            backgroundStyle: {
              color: 'rgba(204, 204, 204, 0.2)' // Gris con opacidad, similar a Tailwind bg-dark-300 bg-opacity-20
            },
            itemStyle: {
              color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                {
                  offset: 0,
                  color: 'rgb(55, 162, 255)' // Color de inicio del gradiente (azul)
                },
                {
                  offset: 1,
                  color: 'rgb(1, 212, 236)' // Color final del gradiente (azul claro)
                }
              ])
            },
            barWidth: '50%' // Ajuste del tamaño de la barra
          }
        ],
        tooltip: {
          trigger: 'item',
          formatter: '{b}: {c} usuarios'
        }
      };

      myChart.setOption(option1);


    </script>


    <!-- PUBLICA POSTULA-->
    <script>
      var chartDom3 = document.getElementById('publica_postula');
      var myChart = echarts.init(chartDom3);

      var option3 = {
        title: {
          text: 'Aplican y Publican Trabajos',
          left: 'center',
          textStyle: {
            fontWeight: 'bold',
            fontSize: 18,
          }
        },
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            type: 'shadow'
          }
        },
        legend: {
          data: ['Usuarios que Aplican', 'Usuarios que Publican'],
          top: '6%',
          left: 'center',
          orient: 'horizontal',  // Orientación horizontal
          padding: [10, 30],      // Padding alrededor de la leyenda
          itemGap: 20,            // Espacio entre los elementos de la leyenda
          itemWidth: 20,          // Ancho del ítem de la leyenda
          itemHeight: 10          // Alto del ítem de la leyenda

        },
        xAxis: {
          type: 'category',
          data: ['Enero', 'Febrero', 'Marzo'], // mes
          axisLabel: {
            fontSize: 12,
          }
        },
        yAxis: {
          type: 'value',
          name: 'Usuarios',
          axisLabel: {
            formatter: '{value}',
            fontSize: 12,
          }
        },
        series: [
          {
            name: 'Usuarios que Aplican',
            type: 'bar',
            data: [100, 120, 90], // Datos para Aplican
            itemStyle: {
              color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                { offset: 0, color: 'rgb(55, 162, 255)' },
                { offset: 1, color: 'rgb(1, 212, 236)' }
              ])
            },
            barWidth: '40%'
          },
          {
            name: 'Usuarios que Publican',
            type: 'bar',
            data: [50, 70, 60], // Datos para Publican
            itemStyle: {
              color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                { offset: 0, color: 'rgb(255, 106, 106)' },
                { offset: 1, color: 'rgb(255, 150, 150)' }
              ])
            },
            barWidth: '40%'
          }
        ]
      };

      option3 && myChart.setOption(option3);
    </script>

    <!-- INGRESOS SUBCRIPCION-->

    <script>
      var chartDom4 = document.getElementById('Ingresos_sub"');
      var myChart = echarts.init(chartDom4);

      var option4 = {
        title: {
          text: 'Ingresos por Suscripciones',
          left: 'center',
          textStyle: {
            fontWeight: 'bold',
            fontSize: 18,
          }
        },
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            type: 'shadow'
          }
        },
        xAxis: {
          type: 'category',
          data: ['Enero', 'Febrero', 'Marzo'], // Meses
          axisLabel: {
            fontSize: 12,
          }
        },
        yAxis: {
          type: 'value',
          axisLabel: {
            formatter: '${value}',
            fontSize: 12,
          }
        },
        series: [
          {
            name: 'Ingresos',
            data: [1500, 2200, 1800], // Ingresos por mes
            type: 'bar',
            showBackground: true,
            backgroundStyle: {
              color: 'rgba(180, 180, 180, 0.2)'
            },
            itemStyle: {
              color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                {
                  offset: 0,
                  color: 'rgb(55, 162, 255)'
                },
                {
                  offset: 1,
                  color: 'rgb(116, 21, 219)'
                }
              ])
            },
            barWidth: '40%'
          }
        ]
      };

      option4 && myChart.setOption(option4);
    </script>



    <!-- Contenedor para el gráfico CATEGORIA DE TRABAJOS -->
    <script>
      // Datos de ejemplo para las categorías de trabajo más solicitados limite 100%
      var data = {
        categories: ['Plomería', 'Electricidad', 'Jardinería', 'Pintura', 'Albañilería', 'Limpieza', 'Cuidado de Ancianos'],
        values: [90, 70, 80, 76, 89, 45, 60]
      };

      // Inicialización del gráfico
      var chartDom2 = document.getElementById('categoria');
      var myChart = echarts.init(chartDom2);

      var option2 = {
        title: {
          text: 'Categoria de Trabajos',
          left: 'center',
          textStyle: {
            fontWeight: 'bold',
            fontSize: 18,
          }
        },
        yAxis: {
          type: 'category',
          data: ['Plomería', 'Electricidad', 'Jardinería', 'Seguridad', 'Albañilería', 'Limpieza', 'Vendedor'],
          axisLabel: {
            color: '#4B5563' // Similar a text-dark-600 de Tailwind
          }
        },
        xAxis: {
          type: 'value',
          axisLabel: {
            color: '#4B5563' // Similar a text-dark-600 de Tailwind
          }
        },
        series: [
          {
            type: 'bar',
            data: [
              { value: 90, name: 'Plomería' },
              { value: 70, name: 'Electricidad' },
              { value: 80, name: 'Jardinería' },
              { value: 76, name: 'Seguridad' },
              { value: 89, name: 'Albañilería' },
              { value: 45, name: 'Limpieza' },
              { value: 60, name: 'Vendedor' }
            ],
            barWidth: '40%',
            itemStyle: {
              color: function (params) {
                // Paleta de colores para cada barra
                const colors = [
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(55, 162, 255)' },
                    { offset: 0, color: 'rgb(1, 212, 236)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(255, 106, 106)' },
                    { offset: 0, color: 'rgb(255, 150, 150)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(255, 191, 0)' },
                    { offset: 0, color: 'rgb(224, 62, 76)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(55, 162, 255)' },
                    { offset: 0, color: 'rgb(1, 212, 236)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(255, 106, 106)' },
                    { offset: 0, color: 'rgb(255, 150, 150)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 1, color: 'rgb(255, 191, 0)' },
                    { offset: 0, color: 'rgb(224, 62, 76)' }
                  ]),
                  new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                    { offset: 0, color: 'rgb(1, 212, 236)' },
                    { offset: 1, color: 'rgb(55, 162, 255)' }
                  ])
                ];
                return colors[params.dataIndex];
              }
            }
          }
        ],
        tooltip: {
          trigger: 'item',
          formatter: '{b}: {c} solicitudes'
        }
      };

      myChart.setOption(option2);


    </script>
</x-layoutadmin>